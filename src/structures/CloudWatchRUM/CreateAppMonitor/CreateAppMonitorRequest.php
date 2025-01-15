<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property Shapes\CustomEvents|null $CustomEvents
 * @property bool|null $CwLogEnabled
 * @property string $Domain
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class CreateAppMonitorRequest extends Request
{
    /**
     * @param array{
     *     AppMonitorConfiguration?: Shapes\AppMonitorConfiguration|null,
     *     CustomEvents?: Shapes\CustomEvents|null,
     *     CwLogEnabled?: bool|null,
     *     Domain: string,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
