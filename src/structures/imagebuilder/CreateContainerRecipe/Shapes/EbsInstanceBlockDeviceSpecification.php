<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateContainerRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $encrypted
 * @property bool|null $deleteOnTermination
 * @property int<100, 64000>|null $iops
 * @property string|null $kmsKeyId
 * @property string|null $snapshotId
 * @property int<1, 16000>|null $volumeSize
 * @property 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1'|null $volumeType
 * @property int<125, 1000>|null $throughput
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     encrypted?: bool|null,
     *     deleteOnTermination?: bool|null,
     *     iops?: int<100, 64000>|null,
     *     kmsKeyId?: string|null,
     *     snapshotId?: string|null,
     *     volumeSize?: int<1, 16000>|null,
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'gp3'|'sc1'|'st1'|null,
     *     throughput?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
