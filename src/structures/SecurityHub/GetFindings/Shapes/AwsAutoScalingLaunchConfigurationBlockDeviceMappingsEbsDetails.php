<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property bool|null $Encrypted
 * @property int|null $Iops
 * @property string|null $SnapshotId
 * @property int|null $VolumeSize
 * @property string|null $VolumeType
 */
class AwsAutoScalingLaunchConfigurationBlockDeviceMappingsEbsDetails extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     Encrypted?: bool|null,
     *     Iops?: int|null,
     *     SnapshotId?: string|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
