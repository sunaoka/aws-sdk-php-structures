<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $encrypted
 * @property bool $deleteOnTermination
 * @property int $iops
 * @property string $kmsKeyId
 * @property string $snapshotId
 * @property int $volumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1' $volumeType
 * @property int $throughput
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     encrypted?: bool,
     *     deleteOnTermination?: bool,
     *     iops?: int,
     *     kmsKeyId?: string,
     *     snapshotId?: string,
     *     volumeSize?: int,
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1',
     *     throughput?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
