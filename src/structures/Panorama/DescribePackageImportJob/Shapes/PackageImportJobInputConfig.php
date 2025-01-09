<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageVersionInputConfig $PackageVersionInputConfig
 */
class PackageImportJobInputConfig extends Shape
{
    /**
     * @param array{PackageVersionInputConfig?: PackageVersionInputConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
