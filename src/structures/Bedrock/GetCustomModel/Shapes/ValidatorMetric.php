<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $validationLoss
 */
class ValidatorMetric extends Shape
{
    /**
     * @param array{validationLoss?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
