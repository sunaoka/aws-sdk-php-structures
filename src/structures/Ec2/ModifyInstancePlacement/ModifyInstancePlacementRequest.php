<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstancePlacement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property int $PartitionNumber
 * @property string $HostResourceGroupArn
 * @property string $GroupId
 * @property string $InstanceId
 * @property 'default'|'dedicated'|'host' $Tenancy
 * @property 'default'|'host' $Affinity
 * @property string $HostId
 */
class ModifyInstancePlacementRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     PartitionNumber?: int,
     *     HostResourceGroupArn?: string,
     *     GroupId?: string,
     *     InstanceId: string,
     *     Tenancy?: 'default'|'dedicated'|'host',
     *     Affinity?: 'default'|'host',
     *     HostId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
