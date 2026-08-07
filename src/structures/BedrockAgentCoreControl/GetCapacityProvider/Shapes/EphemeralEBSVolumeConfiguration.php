<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $volumeType
 * @property int<100, 256000>|null $iops
 * @property int<125, 2000>|null $throughput
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 * @property string|null $snapshotId
 * @property int<1, 65536>|null $volumeSize
 * @property int<100, 300>|null $volumeInitializationRate
 * @property int<0, max>|null $ebsCardIndex
 */
class EphemeralEBSVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     iops?: int<100, 256000>|null,
     *     throughput?: int<125, 2000>|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null,
     *     snapshotId?: string|null,
     *     volumeSize?: int<1, 65536>|null,
     *     volumeInitializationRate?: int<100, 300>|null,
     *     ebsCardIndex?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
