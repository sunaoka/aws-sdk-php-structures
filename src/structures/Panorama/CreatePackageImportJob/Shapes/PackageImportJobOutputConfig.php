<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageVersionOutputConfig $PackageVersionOutputConfig
 */
class PackageImportJobOutputConfig extends Shape
{
    /**
     * @param array{PackageVersionOutputConfig?: PackageVersionOutputConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
