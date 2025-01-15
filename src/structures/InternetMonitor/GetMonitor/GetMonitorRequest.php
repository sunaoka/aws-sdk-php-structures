<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MonitorName
 * @property string|null $LinkedAccountId
 */
class GetMonitorRequest extends Request
{
    /**
     * @param array{
     *     MonitorName: string,
     *     LinkedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
