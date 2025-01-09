<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlgorithmArn
 * @property list<WindowSummary> $TestWindows
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     AlgorithmArn?: string,
     *     TestWindows?: list<WindowSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
