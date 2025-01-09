<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppMonitorConfiguration $AppMonitorConfiguration
 * @property string $Created
 * @property CustomEvents $CustomEvents
 * @property DataStorage $DataStorage
 * @property string $Domain
 * @property string $Id
 * @property string $LastModified
 * @property string $Name
 * @property 'CREATED'|'DELETING'|'ACTIVE' $State
 * @property array<string, string> $Tags
 */
class AppMonitor extends Shape
{
    /**
     * @param array{
     *     AppMonitorConfiguration?: AppMonitorConfiguration,
     *     Created?: string,
     *     CustomEvents?: CustomEvents,
     *     DataStorage?: DataStorage,
     *     Domain?: string,
     *     Id?: string,
     *     LastModified?: string,
     *     Name?: string,
     *     State?: 'CREATED'|'DELETING'|'ACTIVE',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
