<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property string $Affinity
 * @property string $GroupName
 * @property string $HostId
 * @property 'default'|'dedicated'|'host' $Tenancy
 * @property string $SpreadDomain
 * @property string $HostResourceGroupArn
 * @property int $PartitionNumber
 * @property string $GroupId
 */
class LaunchTemplatePlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     Affinity?: string,
     *     GroupName?: string,
     *     HostId?: string,
     *     Tenancy?: 'default'|'dedicated'|'host',
     *     SpreadDomain?: string,
     *     HostResourceGroupArn?: string,
     *     PartitionNumber?: int,
     *     GroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
