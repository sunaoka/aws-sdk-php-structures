<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null $volumeType
 * @property int<100, 64000>|null $iops
 * @property int<125, 2000>|null $throughput
 * @property int<100, 300>|null $volumeInitializationRate
 * @property bool|null $deleteOnTermination
 */
class LaunchTemplateDiskConf extends Shape
{
    /**
     * @param array{
     *     volumeType?: 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null,
     *     iops?: int<100, 64000>|null,
     *     throughput?: int<125, 2000>|null,
     *     volumeInitializationRate?: int<100, 300>|null,
     *     deleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
