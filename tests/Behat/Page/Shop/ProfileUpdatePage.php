<?php

namespace Tests\BitBag\MailChimpPlugin\Behat\Page\Shop;

use Sylius\Behat\Page\Shop\Account\ProfileUpdatePage as BaseProfileUpdatePage;

class ProfileUpdatePage extends BaseProfileUpdatePage implements ProfileUpdatePageInterface
{
    public function unsubscribeNewsletter()
    {
        $this->getDocument()->uncheckField('Subscribe to the newsletter');
    }
}