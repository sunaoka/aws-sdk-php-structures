<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LicenseConfigurationArn
 */
class LaunchTemplateLicenseConfigurationRequest extends Shape
{
    /**
     * @param array{LicenseConfigurationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
