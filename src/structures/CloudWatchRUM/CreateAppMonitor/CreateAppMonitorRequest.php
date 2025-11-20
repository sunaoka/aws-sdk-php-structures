<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Domain
 * @property list<string>|null $DomainList
 * @property array<string, string>|null $Tags
 * @property Shapes\AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property bool|null $CwLogEnabled
 * @property Shapes\CustomEvents|null $CustomEvents
 * @property Shapes\DeobfuscationConfiguration|null $DeobfuscationConfiguration
 * @property 'Web'|'Android'|'iOS'|null $Platform
 */
class CreateAppMonitorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Domain?: string|null,
     *     DomainList?: list<string>|null,
     *     Tags?: array<string, string>|null,
     *     AppMonitorConfiguration?: Shapes\AppMonitorConfiguration|null,
     *     CwLogEnabled?: bool|null,
     *     CustomEvents?: Shapes\CustomEvents|null,
     *     DeobfuscationConfiguration?: Shapes\DeobfuscationConfiguration|null,
     *     Platform?: 'Web'|'Android'|'iOS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
