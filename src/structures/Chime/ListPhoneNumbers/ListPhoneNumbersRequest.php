<?php

namespace Sunaoka\Aws\Structures\Chime\ListPhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed' $Status
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 * @property 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId' $FilterName
 * @property string $FilterValue
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListPhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed',
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn',
     *     FilterName?: 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId',
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
