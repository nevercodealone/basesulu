<?php
namespace NCA\Tests\form;

use NCA\Tests\IntegrationTester;
use NCA\Tests\Page\Base;

class formCest
{

    public function _before(IntegrationTester $I, Base $page)
    {
        $I->amOnPage($page::$URLFORM);
        $I->waitForElement($page::$formEmail);
    }

    /**
     * @group db
     */
    public function validFormSentInsertInDb(IntegrationTester $I, Base $page)
    {
        $email = 'testify' . time() . '@nevercodealone.de';
        $I->fillField($page::$formEmail, $email);
        $I->click($page::$formSubmit);
        $I->waitForText($page::$formSuccessText);

        $I->seeInDatabase(
            'fo_dynamics',
            [
                'data' => '{"email":"' . $email . '"}'
            ]
        );
    }
}
