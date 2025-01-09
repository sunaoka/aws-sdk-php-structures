<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $ViolationTargetDescription
 * @property int<0, 10000> $ConflictingPriority
 * @property string $ConflictingPolicyId
 * @property list<int<0, 10000>> $UnavailablePriorities
 */
class DnsRuleGroupPriorityConflictViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolationTargetDescription?: string,
     *     ConflictingPriority?: int<0, 10000>,
     *     ConflictingPolicyId?: string,
     *     UnavailablePriorities?: list<int<0, 10000>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
