<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetAppMonitorRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
