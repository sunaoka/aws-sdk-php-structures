<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property string|null $Version
 */
class AwsAutoScalingAutoScalingGroupLaunchTemplateLaunchTemplateSpecification extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
