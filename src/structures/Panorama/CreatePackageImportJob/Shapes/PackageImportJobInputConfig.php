<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PackageVersionInputConfig|null $PackageVersionInputConfig
 */
class PackageImportJobInputConfig extends Shape
{
    /**
     * @param array{PackageVersionInputConfig?: PackageVersionInputConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
