<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Properties
 */
class PerformanceMetrics extends Shape
{
    /**
     * @param array{Properties?: array<string, string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
