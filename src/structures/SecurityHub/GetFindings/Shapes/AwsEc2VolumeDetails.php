<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreateTime
 * @property string $DeviceName
 * @property bool $Encrypted
 * @property int $Size
 * @property string $SnapshotId
 * @property string $Status
 * @property string $KmsKeyId
 * @property list<AwsEc2VolumeAttachment> $Attachments
 * @property string $VolumeId
 * @property string $VolumeType
 * @property string $VolumeScanStatus
 */
class AwsEc2VolumeDetails extends Shape
{
    /**
     * @param array{
     *     CreateTime?: string,
     *     DeviceName?: string,
     *     Encrypted?: bool,
     *     Size?: int,
     *     SnapshotId?: string,
     *     Status?: string,
     *     KmsKeyId?: string,
     *     Attachments?: list<AwsEc2VolumeAttachment>,
     *     VolumeId?: string,
     *     VolumeType?: string,
     *     VolumeScanStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
