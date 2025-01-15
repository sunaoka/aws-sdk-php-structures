<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AlgorithmArn
 * @property list<TestWindowSummary>|null $TestWindows
 */
class PredictorExecution extends Shape
{
    /**
     * @param array{
     *     AlgorithmArn?: string|null,
     *     TestWindows?: list<TestWindowSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
