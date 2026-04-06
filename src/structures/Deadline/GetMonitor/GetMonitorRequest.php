<?php

namespace Sunaoka\Aws\Structures\Deadline\GetMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorId
 */
class GetMonitorRequest extends Request
{
    /**
     * @param array{monitorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
