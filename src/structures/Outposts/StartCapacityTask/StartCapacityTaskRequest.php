<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $OrderId
 * @property list<Shapes\InstanceTypeCapacity> $InstancePools
 * @property Shapes\InstancesToExclude $InstancesToExclude
 * @property bool $DryRun
 * @property 'WAIT_FOR_EVACUATION'|'FAIL_TASK' $TaskActionOnBlockingInstances
 */
class StartCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId?: string,
     *     InstancePools: list<Shapes\InstanceTypeCapacity>,
     *     InstancesToExclude?: Shapes\InstancesToExclude,
     *     DryRun?: bool,
     *     TaskActionOnBlockingInstances?: 'WAIT_FOR_EVACUATION'|'FAIL_TASK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
