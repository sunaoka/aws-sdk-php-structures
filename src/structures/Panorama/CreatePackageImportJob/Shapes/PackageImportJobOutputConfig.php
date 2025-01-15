<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageVersionOutputConfig|null $PackageVersionOutputConfig
 */
class PackageImportJobOutputConfig extends Shape
{
    /**
     * @param array{PackageVersionOutputConfig?: PackageVersionOutputConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
