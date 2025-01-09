<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoreCount
 * @property int $ThreadsPerCore
 * @property 'enabled'|'disabled' $AmdSevSnp
 */
class LaunchTemplateCpuOptions extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int,
     *     ThreadsPerCore?: int,
     *     AmdSevSnp?: 'enabled'|'disabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
