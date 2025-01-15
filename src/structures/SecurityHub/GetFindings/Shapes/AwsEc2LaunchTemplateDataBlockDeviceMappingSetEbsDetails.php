<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property bool|null $Encrypted
 * @property int|null $Iops
 * @property string|null $KmsKeyId
 * @property string|null $SnapshotId
 * @property int|null $Throughput
 * @property int|null $VolumeSize
 * @property string|null $VolumeType
 */
class AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     Encrypted?: bool|null,
     *     Iops?: int|null,
     *     KmsKeyId?: string|null,
     *     SnapshotId?: string|null,
     *     Throughput?: int|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
