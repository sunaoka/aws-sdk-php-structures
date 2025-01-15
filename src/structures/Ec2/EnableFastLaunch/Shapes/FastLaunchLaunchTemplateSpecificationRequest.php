<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property string $Version
 */
class FastLaunchLaunchTemplateSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     Version: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
