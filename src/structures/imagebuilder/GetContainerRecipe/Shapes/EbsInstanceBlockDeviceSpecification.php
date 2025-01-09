<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $encrypted
 * @property bool $deleteOnTermination
 * @property int<100, 64000> $iops
 * @property string $kmsKeyId
 * @property string $snapshotId
 * @property int<1, 16000> $volumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1' $volumeType
 * @property int<125, 1000> $throughput
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     encrypted?: bool,
     *     deleteOnTermination?: bool,
     *     iops?: int<100, 64000>,
     *     kmsKeyId?: string,
     *     snapshotId?: string,
     *     volumeSize?: int<1, 16000>,
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1',
     *     throughput?: int<125, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
