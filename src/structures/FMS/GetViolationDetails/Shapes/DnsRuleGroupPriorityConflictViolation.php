<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $ViolationTargetDescription
 * @property int $ConflictingPriority
 * @property string $ConflictingPolicyId
 * @property list<int> $UnavailablePriorities
 */
class DnsRuleGroupPriorityConflictViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolationTargetDescription?: string,
     *     ConflictingPriority?: int,
     *     ConflictingPolicyId?: string,
     *     UnavailablePriorities?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
