<?php

namespace Sunaoka\Aws\Structures\Textract\GetAdapterVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $F1Score
 * @property float|null $Precision
 * @property float|null $Recall
 */
class EvaluationMetric extends Shape
{
    /**
     * @param array{
     *     F1Score?: float|null,
     *     Precision?: float|null,
     *     Recall?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
