<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViolationTarget
 * @property string|null $ViolationTargetDescription
 */
class DnsDuplicateRuleGroupViolation extends Shape
{
    /**
     * @param array{
     *     ViolationTarget?: string|null,
     *     ViolationTargetDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
