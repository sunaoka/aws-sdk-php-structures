<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\DeleteMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 */
class DeleteMonitorRequest extends Request
{
    /**
     * @param array{MonitorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
