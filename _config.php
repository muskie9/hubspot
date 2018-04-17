<?php
\SilverStripe\View\Parsers\ShortcodeParser::get()
    ->register(
        'HSForm',
        [lerni\HubSpot\Extensions\HubSpotRequestExtender::class, 'HSFormShortCodeHandler']
    );
