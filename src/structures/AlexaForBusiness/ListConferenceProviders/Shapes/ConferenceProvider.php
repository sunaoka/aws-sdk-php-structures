<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListConferenceProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM'|null $Type
 * @property IPDialIn|null $IPDialIn
 * @property PSTNDialIn|null $PSTNDialIn
 * @property MeetingSetting|null $MeetingSetting
 */
class ConferenceProvider extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM'|null,
     *     IPDialIn?: IPDialIn|null,
     *     PSTNDialIn?: PSTNDialIn|null,
     *     MeetingSetting?: MeetingSetting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
