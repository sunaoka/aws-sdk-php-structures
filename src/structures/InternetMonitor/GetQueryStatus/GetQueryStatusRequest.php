<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetQueryStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $QueryId
 */
class GetQueryStatusRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     QueryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
