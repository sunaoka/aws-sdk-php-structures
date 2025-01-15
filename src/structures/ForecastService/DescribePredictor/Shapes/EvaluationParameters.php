<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfBacktestWindows
 * @property int|null $BackTestWindowOffset
 */
class EvaluationParameters extends Shape
{
    /**
     * @param array{
     *     NumberOfBacktestWindows?: int|null,
     *     BackTestWindowOffset?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
