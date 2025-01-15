<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListSafetyRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssertionRule|null $ASSERTION
 * @property GatingRule|null $GATING
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     ASSERTION?: AssertionRule|null,
     *     GATING?: GatingRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
