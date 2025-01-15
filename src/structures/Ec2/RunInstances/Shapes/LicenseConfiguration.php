<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LicenseConfigurationArn
 */
class LicenseConfiguration extends Shape
{
    /**
     * @param array{LicenseConfigurationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
