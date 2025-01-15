<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property int|null $Count
 */
class LaunchTemplateElasticInferenceAcceleratorResponse extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
