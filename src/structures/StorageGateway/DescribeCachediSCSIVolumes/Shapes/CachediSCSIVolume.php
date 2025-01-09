<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeCachediSCSIVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeARN
 * @property string $VolumeId
 * @property string $VolumeType
 * @property string $VolumeStatus
 * @property string $VolumeAttachmentStatus
 * @property int $VolumeSizeInBytes
 * @property double $VolumeProgress
 * @property string $SourceSnapshotId
 * @property VolumeiSCSIAttributes $VolumeiSCSIAttributes
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property int $VolumeUsedInBytes
 * @property string $KMSKey
 * @property string $TargetName
 */
class CachediSCSIVolume extends Shape
{
    /**
     * @param array{
     *     VolumeARN?: string,
     *     VolumeId?: string,
     *     VolumeType?: string,
     *     VolumeStatus?: string,
     *     VolumeAttachmentStatus?: string,
     *     VolumeSizeInBytes?: int,
     *     VolumeProgress?: double,
     *     SourceSnapshotId?: string,
     *     VolumeiSCSIAttributes?: VolumeiSCSIAttributes,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     VolumeUsedInBytes?: int,
     *     KMSKey?: string,
     *     TargetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
