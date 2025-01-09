<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppMonitorConfiguration $AppMonitorConfiguration
 * @property Shapes\CustomEvents $CustomEvents
 * @property bool $CwLogEnabled
 * @property string $Domain
 * @property string $Name
 * @property array<string, string> $Tags
 */
class CreateAppMonitorRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorConfiguration?: Shapes\AppMonitorConfiguration,
     *     CustomEvents?: Shapes\CustomEvents,
     *     CwLogEnabled?: bool,
     *     Domain: string,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
