<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $F1Score
 * @property float|null $Recall
 * @property float|null $Precision
 */
class ModelPerformance extends Shape
{
    /**
     * @param array{
     *     F1Score?: float|null,
     *     Recall?: float|null,
     *     Precision?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
