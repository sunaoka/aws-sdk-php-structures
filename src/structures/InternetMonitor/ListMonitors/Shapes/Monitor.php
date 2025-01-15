<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\ListMonitors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitorName
 * @property string $MonitorArn
 * @property 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR' $Status
 * @property 'OK'|'INACTIVE'|'COLLECTING_DATA'|'INSUFFICIENT_DATA'|'FAULT_SERVICE'|'FAULT_ACCESS_CLOUDWATCH'|null $ProcessingStatus
 */
class Monitor extends Shape
{
    /**
     * @param array{
     *     MonitorName: string,
     *     MonitorArn: string,
     *     Status: 'PENDING'|'ACTIVE'|'INACTIVE'|'ERROR',
     *     ProcessingStatus?: 'OK'|'INACTIVE'|'COLLECTING_DATA'|'INSUFFICIENT_DATA'|'FAULT_SERVICE'|'FAULT_ACCESS_CLOUDWATCH'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
