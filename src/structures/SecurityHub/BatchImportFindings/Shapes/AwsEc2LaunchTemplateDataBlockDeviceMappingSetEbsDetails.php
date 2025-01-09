<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DeleteOnTermination
 * @property bool $Encrypted
 * @property int $Iops
 * @property string $KmsKeyId
 * @property string $SnapshotId
 * @property int $Throughput
 * @property int $VolumeSize
 * @property string $VolumeType
 */
class AwsEc2LaunchTemplateDataBlockDeviceMappingSetEbsDetails extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool,
     *     Encrypted?: bool,
     *     Iops?: int,
     *     KmsKeyId?: string,
     *     SnapshotId?: string,
     *     Throughput?: int,
     *     VolumeSize?: int,
     *     VolumeType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
