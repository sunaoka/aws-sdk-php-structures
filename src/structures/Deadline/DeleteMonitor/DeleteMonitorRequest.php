<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 */
class DeleteMonitorRequest extends Request
{
    /**
     * @param array{monitorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
