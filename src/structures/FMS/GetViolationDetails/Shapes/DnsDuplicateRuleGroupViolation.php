<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ViolationTarget
 * @property string $ViolationTargetDescription
 */
class DnsDuplicateRuleGroupViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string,
     *     ViolationTargetDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
