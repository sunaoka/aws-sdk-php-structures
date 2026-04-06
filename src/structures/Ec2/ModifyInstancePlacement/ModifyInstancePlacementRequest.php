<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstancePlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'default'|'host'|null $Affinity
 * @property string|null $GroupName
 * @property string|null $HostId
 * @property string $InstanceId
 * @property 'dedicated'|'host'|null $Tenancy
 * @property int|null $PartitionNumber
 * @property string|null $HostResourceGroupArn
 * @property string|null $GroupId
 */
class ModifyInstancePlacementRequest extends Request
{
    /**
     * @param array{
     *     Affinity?: 'default'|'host'|null,
     *     GroupName?: string|null,
     *     HostId?: string|null,
     *     InstanceId: string,
     *     Tenancy?: 'dedicated'|'host'|null,
     *     PartitionNumber?: int|null,
     *     HostResourceGroupArn?: string|null,
     *     GroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
