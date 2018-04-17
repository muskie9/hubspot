<?php

namespace lerni\HubSpot\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;

/**
 * Class HubSpotConfigExtender
 * @package lerni\HubSpot\Extensions
 */
class HubSpotConfigExtender extends DataExtension
{
    /**
     * @var array
     */
    private static $db = [
        'HubSpotAccountID' => 'Varchar(16)',
    ];

    /**
     * @param FieldList $fields
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            "Root.Main",
            HeaderField::create('HubSpot', 'HubSpot')
                ->setHeadingLevel(3)
        );
        $fields->addFieldToTab(
            'Root.Main',
            TextField::create('HubSpotAccountID')
                ->setTitle('HubSpot Tracking-ID (~7 digits)')
                ->setMaxLength(7)
        );
    }
}
