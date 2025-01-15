<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlgorithmArn
 * @property list<WindowSummary>|null $TestWindows
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     AlgorithmArn?: string|null,
     *     TestWindows?: list<WindowSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
