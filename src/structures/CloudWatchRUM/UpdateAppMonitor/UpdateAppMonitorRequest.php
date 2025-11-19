<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\UpdateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Domain
 * @property list<string>|null $DomainList
 * @property Shapes\AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property bool|null $CwLogEnabled
 * @property Shapes\CustomEvents|null $CustomEvents
 * @property Shapes\DeobfuscationConfiguration|null $DeobfuscationConfiguration
 */
class UpdateAppMonitorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Domain?: string|null,
     *     DomainList?: list<string>|null,
     *     AppMonitorConfiguration?: Shapes\AppMonitorConfiguration|null,
     *     CwLogEnabled?: bool|null,
     *     CustomEvents?: Shapes\CustomEvents|null,
     *     DeobfuscationConfiguration?: Shapes\DeobfuscationConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
