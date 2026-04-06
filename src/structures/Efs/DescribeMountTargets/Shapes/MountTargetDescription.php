<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property string $MountTargetId
 * @property string $FileSystemId
 * @property string $SubnetId
 * @property 'creating'|'available'|'updating'|'deleting'|'deleted'|'error' $LifeCycleState
 * @property string|null $IpAddress
 * @property string|null $NetworkInterfaceId
 * @property string|null $AvailabilityZoneId
 * @property string|null $AvailabilityZoneName
 * @property string|null $VpcId
 */
class MountTargetDescription extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     MountTargetId: string,
     *     FileSystemId: string,
     *     SubnetId: string,
     *     LifeCycleState: 'creating'|'available'|'updating'|'deleting'|'deleted'|'error',
     *     IpAddress?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     AvailabilityZoneName?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
