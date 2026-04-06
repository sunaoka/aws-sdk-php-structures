<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $OrderId
 * @property list<Shapes\InstanceTypeCapacity> $InstancePools
 * @property bool|null $DryRun
 */
class StartCapacityTaskRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId: string,
     *     InstancePools: list<Shapes\InstanceTypeCapacity>,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
