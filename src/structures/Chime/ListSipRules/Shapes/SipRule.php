<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SipRuleId
 * @property string $Name
 * @property bool $Disabled
 * @property 'ToPhoneNumber'|'RequestUriHostname' $TriggerType
 * @property string $TriggerValue
 * @property list<SipRuleTargetApplication> $TargetApplications
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class SipRule extends Shape
{
    /**
     * @param array{
     *     SipRuleId?: string,
     *     Name?: string,
     *     Disabled?: bool,
     *     TriggerType?: 'ToPhoneNumber'|'RequestUriHostname',
     *     TriggerValue?: string,
     *     TargetApplications?: list<SipRuleTargetApplication>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
