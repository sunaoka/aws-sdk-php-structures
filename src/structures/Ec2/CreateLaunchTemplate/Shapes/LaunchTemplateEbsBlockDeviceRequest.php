<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Encrypted
 * @property bool $DeleteOnTermination
 * @property int $Iops
 * @property string $KmsKeyId
 * @property string $SnapshotId
 * @property int $VolumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property int $Throughput
 */
class LaunchTemplateEbsBlockDeviceRequest extends Shape
{
    /**
     * @param array{
     *     Encrypted?: bool,
     *     DeleteOnTermination?: bool,
     *     Iops?: int,
     *     KmsKeyId?: string,
     *     SnapshotId?: string,
     *     VolumeSize?: int,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     Throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
