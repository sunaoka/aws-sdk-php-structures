<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListNotifyCountries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'>|null $Channels
 * @property list<'CODE_VERIFICATION'>|null $UseCases
 * @property 'BASIC'|'ADVANCED'|null $Tier
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListNotifyCountriesRequest extends Request
{
    /**
     * @param array{
     *     Channels?: list<'SMS'|'VOICE'|'MMS'|'RCS'>|null,
     *     UseCases?: list<'CODE_VERIFICATION'>|null,
     *     Tier?: 'BASIC'|'ADVANCED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
