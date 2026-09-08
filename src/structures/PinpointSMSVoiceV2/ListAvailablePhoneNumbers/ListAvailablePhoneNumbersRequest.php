<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListAvailablePhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IsoCountryCode
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'> $NumberCapabilities
 * @property 'TEN_DLC' $NumberType
 * @property string|null $RegistrationId
 * @property list<Shapes\NumberPreferenceItem>|null $NumberPreference
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListAvailablePhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     IsoCountryCode: string,
     *     NumberCapabilities: list<'SMS'|'VOICE'|'MMS'|'RCS'>,
     *     NumberType: 'TEN_DLC',
     *     RegistrationId?: string|null,
     *     NumberPreference?: list<Shapes\NumberPreferenceItem>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
