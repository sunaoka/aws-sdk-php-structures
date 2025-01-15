<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Status
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null $FilterName
 * @property string|null $FilterValue
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     Status?: string|null,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     FilterName?: 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null,
     *     FilterValue?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
