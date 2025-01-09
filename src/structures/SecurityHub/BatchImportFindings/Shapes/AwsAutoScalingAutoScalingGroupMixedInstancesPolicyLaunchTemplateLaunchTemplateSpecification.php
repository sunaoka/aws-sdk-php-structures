<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property string $Version
 */
class AwsAutoScalingAutoScalingGroupMixedInstancesPolicyLaunchTemplateLaunchTemplateSpecification extends Shape
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
