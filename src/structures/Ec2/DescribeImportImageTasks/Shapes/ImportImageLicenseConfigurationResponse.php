<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImportImageTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LicenseConfigurationArn
 */
class ImportImageLicenseConfigurationResponse extends Shape
{
    /**
     * @param array{LicenseConfigurationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
