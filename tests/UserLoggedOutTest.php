<?php namespace Tests;

class UserLoggedOutTest extends TestCase {
    protected function constructInput() {
        return array_merge(parent::constructInput(), [
            'eventname' => '\core\event\user_loggedout',
        ]);
    }
}