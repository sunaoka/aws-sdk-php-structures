<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeStorediSCSIVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeARN
 * @property string $VolumeId
 * @property string $VolumeType
 * @property string $VolumeStatus
 * @property string $VolumeAttachmentStatus
 * @property int $VolumeSizeInBytes
 * @property double $VolumeProgress
 * @property string $VolumeDiskId
 * @property string $SourceSnapshotId
 * @property bool $PreservedExistingData
 * @property VolumeiSCSIAttributes $VolumeiSCSIAttributes
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property int $VolumeUsedInBytes
 * @property string $KMSKey
 * @property string $TargetName
 */
class StorediSCSIVolume extends Shape
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
     *     VolumeDiskId?: string,
     *     SourceSnapshotId?: string,
     *     PreservedExistingData?: bool,
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
