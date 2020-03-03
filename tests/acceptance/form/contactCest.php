<?php
namespace NCA\Tests\form;

use NCA\Tests\AcceptanceTester;
use NCA\Tests\Page\Base;

class contactCest
{
    public function _before(AcceptanceTester $I, Base $page)
    {
        $I->amOnPage($page::$URLFORM);
        $I->waitForElement($page::$formEmail);
    }

    // tests
    public function emailIsRequired(AcceptanceTester $I, Base $page)
    {
        $required = $I->grabAttributeFrom($page::$formEmail, 'required');
        $I->assertSame('true', $required);
    }
}
