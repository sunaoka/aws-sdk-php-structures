<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeARN
 * @property string|null $VolumeId
 * @property string|null $GatewayARN
 * @property string|null $GatewayId
 * @property string|null $VolumeType
 * @property int|null $VolumeSizeInBytes
 * @property string|null $VolumeAttachmentStatus
 */
class VolumeInfo extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string|null,
     *     VolumeId?: string|null,
     *     GatewayARN?: string|null,
     *     GatewayId?: string|null,
     *     VolumeType?: string|null,
     *     VolumeSizeInBytes?: int|null,
     *     VolumeAttachmentStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
