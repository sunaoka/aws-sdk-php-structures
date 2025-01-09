<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\StopQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string $QueryId
 */
class StopQueryRequest extends Request
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
