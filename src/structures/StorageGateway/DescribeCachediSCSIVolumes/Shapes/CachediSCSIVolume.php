<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeARN
 * @property string|null $VolumeId
 * @property string|null $VolumeType
 * @property string|null $VolumeStatus
 * @property string|null $VolumeAttachmentStatus
 * @property int|null $VolumeSizeInBytes
 * @property double|null $VolumeProgress
 * @property string|null $SourceSnapshotId
 * @property VolumeiSCSIAttributes|null $VolumeiSCSIAttributes
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property int|null $VolumeUsedInBytes
 * @property string|null $KMSKey
 * @property string|null $TargetName
 */
class CachediSCSIVolume extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string|null,
     *     VolumeId?: string|null,
     *     VolumeType?: string|null,
     *     VolumeStatus?: string|null,
     *     VolumeAttachmentStatus?: string|null,
     *     VolumeSizeInBytes?: int|null,
     *     VolumeProgress?: double|null,
     *     SourceSnapshotId?: string|null,
     *     VolumeiSCSIAttributes?: VolumeiSCSIAttributes|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     VolumeUsedInBytes?: int|null,
     *     KMSKey?: string|null,
     *     TargetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
