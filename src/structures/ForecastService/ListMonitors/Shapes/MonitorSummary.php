<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitorArn
 * @property string $MonitorName
 * @property string $ResourceArn
 * @property string $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string,
     *     MonitorName?: string,
     *     ResourceArn?: string,
     *     Status?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
