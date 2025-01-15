<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 64000>|null $iops
 * @property int<125, 1000>|null $throughput
 * @property 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null $volumeType
 */
class LaunchTemplateDiskConf extends Shape
{
    /**
     * @param array{
     *     iops?: int<100, 64000>|null,
     *     throughput?: int<125, 1000>|null,
     *     volumeType?: 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
