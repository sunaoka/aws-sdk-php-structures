<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property Shapes\CustomEvents|null $CustomEvents
 * @property bool|null $CwLogEnabled
 * @property Shapes\DeobfuscationConfiguration|null $DeobfuscationConfiguration
 * @property string|null $Domain
 * @property list<string>|null $DomainList
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
     *     DeobfuscationConfiguration?: Shapes\DeobfuscationConfiguration|null,
     *     Domain?: string|null,
     *     DomainList?: list<string>|null,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
