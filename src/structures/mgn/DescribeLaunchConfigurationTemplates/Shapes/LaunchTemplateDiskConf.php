<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $iops
 * @property int $throughput
 * @property 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard' $volumeType
 */
class LaunchTemplateDiskConf extends Shape
{
    /**
     * @param array{
     *     iops?: int,
     *     throughput?: int,
     *     volumeType?: 'io1'|'io2'|'gp3'|'gp2'|'st1'|'sc1'|'standard'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
