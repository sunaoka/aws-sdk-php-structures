<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorArn
 */
class DescribeMonitorRequest extends Request
{
    /**
     * @param array{MonitorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
