<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SipRuleId
 * @property string|null $Name
 * @property bool|null $Disabled
 * @property 'ToPhoneNumber'|'RequestUriHostname'|null $TriggerType
 * @property string|null $TriggerValue
 * @property list<SipRuleTargetApplication>|null $TargetApplications
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class SipRule extends Shape
{
    /**
     * @param array{
     *     SipRuleId?: string|null,
     *     Name?: string|null,
     *     Disabled?: bool|null,
     *     TriggerType?: 'ToPhoneNumber'|'RequestUriHostname'|null,
     *     TriggerValue?: string|null,
     *     TargetApplications?: list<SipRuleTargetApplication>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
