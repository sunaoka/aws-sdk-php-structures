<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CodeBlock
 */
class CalculationConfiguration extends Shape
{
    /**
     * @param array{CodeBlock?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
