<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseConfigurationArn
 */
class LaunchTemplateLicenseConfiguration extends Shape
{
    /**
     * @param array{LicenseConfigurationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
