<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string|null $OrderId
 * @property string|null $AssetId
 * @property list<Shapes\InstanceTypeCapacity> $InstancePools
 * @property Shapes\InstancesToExclude|null $InstancesToExclude
 * @property bool|null $DryRun
 * @property 'WAIT_FOR_EVACUATION'|'FAIL_TASK'|null $TaskActionOnBlockingInstances
 */
class StartCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId?: string|null,
     *     AssetId?: string|null,
     *     InstancePools: list<Shapes\InstanceTypeCapacity>,
     *     InstancesToExclude?: Shapes\InstancesToExclude|null,
     *     DryRun?: bool|null,
     *     TaskActionOnBlockingInstances?: 'WAIT_FOR_EVACUATION'|'FAIL_TASK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
