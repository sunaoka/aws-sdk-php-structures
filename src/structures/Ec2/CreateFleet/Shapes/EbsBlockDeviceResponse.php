<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Encrypted
 * @property bool|null $DeleteOnTermination
 * @property int|null $Iops
 * @property int|null $Throughput
 * @property string|null $KmsKeyId
 * @property string|null $SnapshotId
 * @property int|null $VolumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 */
class EbsBlockDeviceResponse extends Shape
{
    /**
     * @param array{
     *     Encrypted?: bool|null,
     *     DeleteOnTermination?: bool|null,
     *     Iops?: int|null,
     *     Throughput?: int|null,
     *     KmsKeyId?: string|null,
     *     SnapshotId?: string|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
