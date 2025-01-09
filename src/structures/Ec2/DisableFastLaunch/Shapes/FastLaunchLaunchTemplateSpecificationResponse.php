<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property string $Version
 */
class FastLaunchLaunchTemplateSpecificationResponse extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
