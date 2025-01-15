<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $F1Score
 * @property Summary|null $Summary
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     F1Score?: float|null,
     *     Summary?: Summary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
