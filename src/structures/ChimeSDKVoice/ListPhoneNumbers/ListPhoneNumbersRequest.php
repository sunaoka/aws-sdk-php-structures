<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListPhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Status
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId' $FilterName
 * @property string $FilterValue
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     Status?: string,
     *     ProductType?: 'VoiceConnector'|'SipMediaApplicationDialIn',
     *     FilterName?: 'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId',
     *     FilterValue?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
