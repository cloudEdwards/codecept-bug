<?php


class TestCest
{

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnUrl('http://tests.programs.dev/test.php?stuff=other');
        $I->fillField('#texty', 'thingshjere');
        $I->click('#submit-registration');
        $I->see('adshsdfohadsfd');
    }
}
