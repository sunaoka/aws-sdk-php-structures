<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $ViolationTargetDescription
 * @property int<-2147483648, 2147483647>|null $NumberOfRuleGroupsAlreadyAssociated
 */
class DnsRuleGroupLimitExceededViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ViolationTargetDescription?: string|null,
     *     NumberOfRuleGroupsAlreadyAssociated?: int<-2147483648, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
