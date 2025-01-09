<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $F1Score
 * @property Summary $Summary
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     F1Score?: float,
     *     Summary?: Summary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
