<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Detail
 * @property \Aws\Api\DateTimeResult $Datetime
 */
class PredictorEvent extends Shape
{
    /**
     * @param array{
     *     Detail?: string,
     *     Datetime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
