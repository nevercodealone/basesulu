<?php
namespace NCA\Tests\Page;

class Base
{
    // include url of current page
    public static $URL = '/';

    public static $navLangEn = '#navLanguage > li:nth-child(2) > a';

    public static $startpageHeadline = 'h1';

    public static $URLFORM = '/de/formular';
    public static $formEmail = '#dynamic_form1_email';
    public static $formSubmit = '#dynamic_form1_submit';
    public static $formSuccessText = 'Danke';
}
