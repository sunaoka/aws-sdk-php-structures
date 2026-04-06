<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstancePlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property int|null $PartitionNumber
 * @property string|null $HostResourceGroupArn
 * @property string|null $GroupId
 * @property string $InstanceId
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 * @property 'default'|'host'|null $Affinity
 * @property string|null $HostId
 */
class ModifyInstancePlacementRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     PartitionNumber?: int|null,
     *     HostResourceGroupArn?: string|null,
     *     GroupId?: string|null,
     *     InstanceId: string,
     *     Tenancy?: 'default'|'dedicated'|'host'|null,
     *     Affinity?: 'default'|'host'|null,
     *     HostId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
