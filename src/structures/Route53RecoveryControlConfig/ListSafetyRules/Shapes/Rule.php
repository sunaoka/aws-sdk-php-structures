<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListSafetyRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssertionRule $ASSERTION
 * @property GatingRule $GATING
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     ASSERTION?: AssertionRule,
     *     GATING?: GatingRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
