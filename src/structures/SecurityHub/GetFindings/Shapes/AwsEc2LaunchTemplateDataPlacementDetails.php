<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Affinity
 * @property string|null $AvailabilityZone
 * @property string|null $GroupName
 * @property string|null $HostId
 * @property string|null $HostResourceGroupArn
 * @property int|null $PartitionNumber
 * @property string|null $SpreadDomain
 * @property string|null $Tenancy
 */
class AwsEc2LaunchTemplateDataPlacementDetails extends Shape
{
    /**
     * @param array{
     *     Affinity?: string|null,
     *     AvailabilityZone?: string|null,
     *     GroupName?: string|null,
     *     HostId?: string|null,
     *     HostResourceGroupArn?: string|null,
     *     PartitionNumber?: int|null,
     *     SpreadDomain?: string|null,
     *     Tenancy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
