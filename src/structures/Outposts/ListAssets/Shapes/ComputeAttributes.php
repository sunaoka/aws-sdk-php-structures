<?php

namespace Sunaoka\Aws\Structures\Outposts\ListAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostId
 * @property 'ACTIVE'|'ISOLATED'|'RETIRING' $State
 * @property list<string> $InstanceFamilies
 * @property list<AssetInstanceTypeCapacity> $InstanceTypeCapacities
 * @property int $MaxVcpus
 */
class ComputeAttributes extends Shape
{
    /**
     * @param array{
     *     HostId?: string,
     *     State?: 'ACTIVE'|'ISOLATED'|'RETIRING',
     *     InstanceFamilies?: list<string>,
     *     InstanceTypeCapacities?: list<AssetInstanceTypeCapacity>,
     *     MaxVcpus?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
