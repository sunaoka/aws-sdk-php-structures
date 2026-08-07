<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 65536> $sizeGiB
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $volumeType
 * @property int<100, 256000>|null $iops
 * @property int<125, 2000>|null $throughput
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 * @property string|null $snapshotId
 */
class EbsVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     sizeGiB: int<1, 65536>,
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     iops?: int<100, 256000>|null,
     *     throughput?: int<125, 2000>|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null,
     *     snapshotId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
