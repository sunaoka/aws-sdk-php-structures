<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Statement $Statement
 */
class NotStatement extends Shape
{
    /**
     * @param array{Statement: Statement} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
