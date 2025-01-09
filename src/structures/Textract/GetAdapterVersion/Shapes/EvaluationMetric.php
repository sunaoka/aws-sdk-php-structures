<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $F1Score
 * @property float $Precision
 * @property float $Recall
 */
class EvaluationMetric extends Shape
{
    /**
     * @param array{
     *     F1Score?: float,
     *     Precision?: float,
     *     Recall?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
