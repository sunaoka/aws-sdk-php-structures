<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetCustomDetectionRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 */
class RuleDefinition extends Shape
{
    /**
     * @param array{Expression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
