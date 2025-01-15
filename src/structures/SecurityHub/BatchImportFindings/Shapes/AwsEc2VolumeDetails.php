<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreateTime
 * @property string|null $DeviceName
 * @property bool|null $Encrypted
 * @property int|null $Size
 * @property string|null $SnapshotId
 * @property string|null $Status
 * @property string|null $KmsKeyId
 * @property list<AwsEc2VolumeAttachment>|null $Attachments
 * @property string|null $VolumeId
 * @property string|null $VolumeType
 * @property string|null $VolumeScanStatus
 */
class AwsEc2VolumeDetails extends Shape
{
    /**
     * @param array{
     *     CreateTime?: string|null,
     *     DeviceName?: string|null,
     *     Encrypted?: bool|null,
     *     Size?: int|null,
     *     SnapshotId?: string|null,
     *     Status?: string|null,
     *     KmsKeyId?: string|null,
     *     Attachments?: list<AwsEc2VolumeAttachment>|null,
     *     VolumeId?: string|null,
     *     VolumeType?: string|null,
     *     VolumeScanStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
