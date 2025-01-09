<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $trainingLoss
 */
class TrainingMetrics extends Shape
{
    /**
     * @param array{trainingLoss?: float} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
