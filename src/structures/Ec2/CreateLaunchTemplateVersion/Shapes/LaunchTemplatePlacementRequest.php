<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property string|null $Affinity
 * @property string|null $GroupName
 * @property string|null $HostId
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 * @property string|null $SpreadDomain
 * @property string|null $HostResourceGroupArn
 * @property int|null $PartitionNumber
 * @property string|null $GroupId
 */
class LaunchTemplatePlacementRequest extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Affinity?: string|null,
     *     GroupName?: string|null,
     *     HostId?: string|null,
     *     Tenancy?: 'default'|'dedicated'|'host'|null,
     *     SpreadDomain?: string|null,
     *     HostResourceGroupArn?: string|null,
     *     PartitionNumber?: int|null,
     *     GroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
