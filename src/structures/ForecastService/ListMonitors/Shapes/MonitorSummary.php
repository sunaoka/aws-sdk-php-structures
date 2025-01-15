<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MonitorArn
 * @property string|null $MonitorName
 * @property string|null $ResourceArn
 * @property string|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class MonitorSummary extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string|null,
     *     MonitorName?: string|null,
     *     ResourceArn?: string|null,
     *     Status?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
