<?php

namespace Sunaoka\Aws\Structures\S3Files\ListMountTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZoneId
 * @property string|null $fileSystemId
 * @property string|null $ipv4Address
 * @property string|null $ipv6Address
 * @property 'available'|'creating'|'deleting'|'deleted'|'error'|'updating'|null $status
 * @property string|null $statusMessage
 * @property string $mountTargetId
 * @property string|null $networkInterfaceId
 * @property string $ownerId
 * @property string $subnetId
 * @property string|null $vpcId
 */
class ListMountTargetsDescription extends Shape
{
    /**
     * @param array{
     *     availabilityZoneId?: string|null,
     *     fileSystemId?: string|null,
     *     ipv4Address?: string|null,
     *     ipv6Address?: string|null,
     *     status?: 'available'|'creating'|'deleting'|'deleted'|'error'|'updating'|null,
     *     statusMessage?: string|null,
     *     mountTargetId: string,
     *     networkInterfaceId?: string|null,
     *     ownerId: string,
     *     subnetId: string,
     *     vpcId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
