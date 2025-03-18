<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property string|null $Created
 * @property CustomEvents|null $CustomEvents
 * @property DataStorage|null $DataStorage
 * @property DeobfuscationConfiguration|null $DeobfuscationConfiguration
 * @property string|null $Domain
 * @property list<string>|null $DomainList
 * @property string|null $Id
 * @property string|null $LastModified
 * @property string|null $Name
 * @property 'CREATED'|'DELETING'|'ACTIVE'|null $State
 * @property array<string, string>|null $Tags
 */
class AppMonitor extends Shape
{
    /**
     * @param array{
     *     AppMonitorConfiguration?: AppMonitorConfiguration|null,
     *     Created?: string|null,
     *     CustomEvents?: CustomEvents|null,
     *     DataStorage?: DataStorage|null,
     *     DeobfuscationConfiguration?: DeobfuscationConfiguration|null,
     *     Domain?: string|null,
     *     DomainList?: list<string>|null,
     *     Id?: string|null,
     *     LastModified?: string|null,
     *     Name?: string|null,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
