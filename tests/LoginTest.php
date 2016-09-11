<?php


class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    protected $user;

    public function testLoginPage()
    {
        $this->visit('/login')
        ->see('email')
        ->see('password');
    }

    public function testLogin()
    {
        $this->visit('/login')
        ->type('test@example.com', 'email')
        ->type('passw0rd', 'password')
        ->press('Login')
        ->seePageIs('/home')
        ->see('Account');
    }
}
