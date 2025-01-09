<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorArn
 */
class DeleteMonitorRequest extends Request
{
    /**
     * @param array{MonitorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
