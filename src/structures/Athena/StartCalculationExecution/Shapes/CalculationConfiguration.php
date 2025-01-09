<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CodeBlock
 */
class CalculationConfiguration extends Shape
{
    /**
     * @param array{CodeBlock?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
