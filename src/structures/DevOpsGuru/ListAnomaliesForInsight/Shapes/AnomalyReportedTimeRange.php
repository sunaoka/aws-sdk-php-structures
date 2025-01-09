<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $OpenTime
 * @property \Aws\Api\DateTimeResult $CloseTime
 */
class AnomalyReportedTimeRange extends Shape
{
    /**
     * @param array{
     *     OpenTime: \Aws\Api\DateTimeResult,
     *     CloseTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
