<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $volumeType
 * @property int<100, 256000>|null $iops
 * @property int<125, 2000>|null $throughput
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 * @property int<2, 65000>|null $freeSpaceGiB
 */
class RootVolumeConfiguration extends Shape
{
    /**
     * @param array{
     *     volumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     iops?: int<100, 256000>|null,
     *     throughput?: int<125, 2000>|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null,
     *     freeSpaceGiB?: int<2, 65000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
