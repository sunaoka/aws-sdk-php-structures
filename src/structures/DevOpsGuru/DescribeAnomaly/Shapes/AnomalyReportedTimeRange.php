<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $OpenTime
 * @property \Aws\Api\DateTimeResult|null $CloseTime
 */
class AnomalyReportedTimeRange extends Shape
{
    /**
     * @param array{
     *     OpenTime: \Aws\Api\DateTimeResult,
     *     CloseTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
