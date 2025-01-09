<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Affinity
 * @property string $AvailabilityZone
 * @property string $GroupName
 * @property string $HostId
 * @property string $HostResourceGroupArn
 * @property int $PartitionNumber
 * @property string $SpreadDomain
 * @property string $Tenancy
 */
class AwsEc2LaunchTemplateDataPlacementDetails extends Shape
{
    /**
     * @param array{
     *     Affinity?: string,
     *     AvailabilityZone?: string,
     *     GroupName?: string,
     *     HostId?: string,
     *     HostResourceGroupArn?: string,
     *     PartitionNumber?: int,
     *     SpreadDomain?: string,
     *     Tenancy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
