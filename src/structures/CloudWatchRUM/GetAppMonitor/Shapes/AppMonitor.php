<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Domain
 * @property list<string>|null $DomainList
 * @property string|null $Id
 * @property string|null $Created
 * @property string|null $LastModified
 * @property array<string, string>|null $Tags
 * @property 'CREATED'|'DELETING'|'ACTIVE'|null $State
 * @property AppMonitorConfiguration|null $AppMonitorConfiguration
 * @property DataStorage|null $DataStorage
 * @property CustomEvents|null $CustomEvents
 * @property DeobfuscationConfiguration|null $DeobfuscationConfiguration
 * @property 'Web'|'Android'|'iOS'|null $Platform
 */
class AppMonitor extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Domain?: string|null,
     *     DomainList?: list<string>|null,
     *     Id?: string|null,
     *     Created?: string|null,
     *     LastModified?: string|null,
     *     Tags?: array<string, string>|null,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE'|null,
     *     AppMonitorConfiguration?: AppMonitorConfiguration|null,
     *     DataStorage?: DataStorage|null,
     *     CustomEvents?: CustomEvents|null,
     *     DeobfuscationConfiguration?: DeobfuscationConfiguration|null,
     *     Platform?: 'Web'|'Android'|'iOS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
