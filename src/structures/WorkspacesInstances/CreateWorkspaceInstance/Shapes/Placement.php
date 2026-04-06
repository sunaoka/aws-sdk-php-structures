<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Affinity
 * @property string|null $AvailabilityZone
 * @property string|null $GroupId
 * @property string|null $GroupName
 * @property string|null $HostId
 * @property string|null $HostResourceGroupArn
 * @property int<0, max>|null $PartitionNumber
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 */
class Placement extends Shape
{
    /**
     * @param array{
     *     Affinity?: string|null,
     *     AvailabilityZone?: string|null,
     *     GroupId?: string|null,
     *     GroupName?: string|null,
     *     HostId?: string|null,
     *     HostResourceGroupArn?: string|null,
     *     PartitionNumber?: int<0, max>|null,
     *     Tenancy?: 'default'|'dedicated'|'host'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
