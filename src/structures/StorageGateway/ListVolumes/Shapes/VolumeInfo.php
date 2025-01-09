<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeARN
 * @property string $VolumeId
 * @property string $GatewayARN
 * @property string $GatewayId
 * @property string $VolumeType
 * @property int $VolumeSizeInBytes
 * @property string $VolumeAttachmentStatus
 */
class VolumeInfo extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string,
     *     VolumeId?: string,
     *     GatewayARN?: string,
     *     GatewayId?: string,
     *     VolumeType?: string,
     *     VolumeSizeInBytes?: int,
     *     VolumeAttachmentStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
