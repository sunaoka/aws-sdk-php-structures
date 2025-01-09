<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property string $MountTargetId
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string $IpAddress
 * @property string $NetworkInterfaceId
 * @property string $AvailabilityZoneId
 * @property string $AvailabilityZoneName
 * @property string $VpcId
 */
class MountTargetDescription extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     MountTargetId: string,
     *     FileSystemId: string,
     *     SubnetId: string,
     *     LifeCycleState: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error',
     *     IpAddress?: string,
     *     NetworkInterfaceId?: string,
     *     AvailabilityZoneId?: string,
     *     AvailabilityZoneName?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
