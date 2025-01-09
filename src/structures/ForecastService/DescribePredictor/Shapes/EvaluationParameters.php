<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfBacktestWindows
 * @property int $BackTestWindowOffset
 */
class EvaluationParameters extends Shape
{
    /**
     * @param array{
     *     NumberOfBacktestWindows?: int,
     *     BackTestWindowOffset?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
