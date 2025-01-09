<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\DeleteAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteAppMonitorRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
