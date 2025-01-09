<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppMonitorConfiguration $AppMonitorConfiguration
 * @property Shapes\CustomEvents $CustomEvents
 * @property bool $CwLogEnabled
 * @property string $Domain
 * @property string $Name
 */
class UpdateAppMonitorRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorConfiguration?: Shapes\AppMonitorConfiguration,
     *     CustomEvents?: Shapes\CustomEvents,
     *     CwLogEnabled?: bool,
     *     Domain?: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
