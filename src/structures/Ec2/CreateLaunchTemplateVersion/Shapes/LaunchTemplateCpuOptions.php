<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CoreCount
 * @property int|null $ThreadsPerCore
 * @property 'enabled'|'disabled'|null $AmdSevSnp
 */
class LaunchTemplateCpuOptions extends Shape
{
    /**
     * @param array{
     *     CoreCount?: int|null,
     *     ThreadsPerCore?: int|null,
     *     AmdSevSnp?: 'enabled'|'disabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
