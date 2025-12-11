<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null $volumeType
 * @property int<100, 64000>|null $iops
 * @property int<125, 1000>|null $throughput
 */
class LaunchTemplateDiskConf extends Shape
{
    /**
     * @param array{
     *     volumeType?: 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null,
     *     iops?: int<100, 64000>|null,
     *     throughput?: int<125, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
