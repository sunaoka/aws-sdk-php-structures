<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitorEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Detail
 * @property \Aws\Api\DateTimeResult|null $Datetime
 */
class PredictorEvent extends Shape
{
    /**
     * @param array{
     *     Detail?: string|null,
     *     Datetime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
