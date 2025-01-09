<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $F1Score
 * @property float $Recall
 * @property float $Precision
 */
class ModelPerformance extends Shape
{
    /**
     * @param array{
     *     F1Score?: float,
     *     Recall?: float,
     *     Precision?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
