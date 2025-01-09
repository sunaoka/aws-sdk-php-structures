<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $ViolationTargetDescription
 * @property int $NumberOfRuleGroupsAlreadyAssociated
 */
class DnsRuleGroupLimitExceededViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolationTargetDescription?: string,
     *     NumberOfRuleGroupsAlreadyAssociated?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
