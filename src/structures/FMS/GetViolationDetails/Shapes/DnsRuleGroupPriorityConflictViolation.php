<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $ViolationTargetDescription
 * @property int<0, 10000>|null $ConflictingPriority
 * @property string|null $ConflictingPolicyId
 * @property list<int<0, 10000>>|null $UnavailablePriorities
 */
class DnsRuleGroupPriorityConflictViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ViolationTargetDescription?: string|null,
     *     ConflictingPriority?: int<0, 10000>|null,
     *     ConflictingPolicyId?: string|null,
     *     UnavailablePriorities?: list<int<0, 10000>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
