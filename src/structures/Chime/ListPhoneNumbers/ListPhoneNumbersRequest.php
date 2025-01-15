<?php

namespace Sunaoka\Aws\Structures\Chime\ListPhoneNumbers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed'|null $Status
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null $ProductType
 * @property 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null $FilterName
 * @property string|null $FilterValue
 * @property int<1, 99>|null $MaxResults
 * @property string|null $NextToken
 */
class ListPhoneNumbersRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'AcquireInProgress'|'AcquireFailed'|'Unassigned'|'Assigned'|'ReleaseInProgress'|'DeleteInProgress'|'ReleaseFailed'|'DeleteFailed'|null,
     *     ProductType?: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'|null,
     *     FilterName?: 'AccountId'|'UserId'|'VoiceConnectorId'|'VoiceConnectorGroupId'|'SipRuleId'|null,
     *     FilterValue?: string|null,
     *     MaxResults?: int<1, 99>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
