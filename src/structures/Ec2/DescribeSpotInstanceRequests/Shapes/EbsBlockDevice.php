<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotInstanceRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DeleteOnTermination
 * @property int $Iops
 * @property string $SnapshotId
 * @property int $VolumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3' $VolumeType
 * @property string $KmsKeyId
 * @property int $Throughput
 * @property string $OutpostArn
 * @property bool $Encrypted
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool,
     *     Iops?: int,
     *     SnapshotId?: string,
     *     VolumeSize?: int,
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3',
     *     KmsKeyId?: string,
     *     Throughput?: int,
     *     OutpostArn?: string,
     *     Encrypted?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
