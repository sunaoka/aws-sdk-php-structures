<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateConferenceProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConferenceProviderName
 * @property 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM' $ConferenceProviderType
 * @property Shapes\IPDialIn|null $IPDialIn
 * @property Shapes\PSTNDialIn|null $PSTNDialIn
 * @property Shapes\MeetingSetting $MeetingSetting
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateConferenceProviderRequest extends Request
{
    /**
     * @param array{
     *     ConferenceProviderName: string,
     *     ConferenceProviderType: 'CHIME'|'BLUEJEANS'|'FUZE'|'GOOGLE_HANGOUTS'|'POLYCOM'|'RINGCENTRAL'|'SKYPE_FOR_BUSINESS'|'WEBEX'|'ZOOM'|'CUSTOM',
     *     IPDialIn?: Shapes\IPDialIn|null,
     *     PSTNDialIn?: Shapes\PSTNDialIn|null,
     *     MeetingSetting: Shapes\MeetingSetting,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
