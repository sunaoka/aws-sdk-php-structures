<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateConferenceProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConferenceProviderArn
 * @property 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM' $ConferenceProviderType
 * @property Shapes\IPDialIn|null $IPDialIn
 * @property Shapes\PSTNDialIn|null $PSTNDialIn
 * @property Shapes\MeetingSetting $MeetingSetting
 */
class UpdateConferenceProviderRequest extends Request
{
    /**
     * @param array{
     *     ConferenceProviderArn: string,
     *     ConferenceProviderType: 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM',
     *     IPDialIn?: Shapes\IPDialIn|null,
     *     PSTNDialIn?: Shapes\PSTNDialIn|null,
     *     MeetingSetting: Shapes\MeetingSetting
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
