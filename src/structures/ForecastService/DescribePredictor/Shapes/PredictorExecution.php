<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AlgorithmArn
 * @property list<TestWindowSummary> $TestWindows
 */
class PredictorExecution extends Shape
{
    /**
     * @param array{
     *     AlgorithmArn?: string,
     *     TestWindows?: list<TestWindowSummary>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
