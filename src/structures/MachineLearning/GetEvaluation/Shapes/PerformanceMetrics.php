<?php

namespace Sunaoka\Aws\Structures\MachineLearning\GetEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Properties
 */
class PerformanceMetrics extends Shape
{
    /**
     * @param array{Properties?: array<string, string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
