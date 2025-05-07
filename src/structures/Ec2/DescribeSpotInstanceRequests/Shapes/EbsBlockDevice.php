<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property int|null $Iops
 * @property string|null $SnapshotId
 * @property int|null $VolumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property string|null $KmsKeyId
 * @property int|null $Throughput
 * @property string|null $OutpostArn
 * @property bool|null $Encrypted
 * @property int|null $VolumeInitializationRate
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     Iops?: int|null,
     *     SnapshotId?: string|null,
     *     VolumeSize?: int|null,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     KmsKeyId?: string|null,
     *     Throughput?: int|null,
     *     OutpostArn?: string|null,
     *     Encrypted?: bool|null,
     *     VolumeInitializationRate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
