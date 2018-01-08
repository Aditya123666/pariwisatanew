<?php

class TestClass extends PHPUnit_Framework_TestCase
{
        public function testFile()
        {
                ob_start();
                include 'testlinkfacebook.php';
                $content = ob_get_contents();
                ob_end_clean();
                $this->assertEquals('<a href="https://web.facebook.com/aditya.sakitjiwa">FACEBOOK</a>', $content);
        }
}