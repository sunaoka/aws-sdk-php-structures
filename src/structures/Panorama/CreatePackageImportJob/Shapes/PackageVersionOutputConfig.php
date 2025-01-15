<?php

namespace Sunaoka\Aws\Structures\Panorama\CreatePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $MarkLatest
 * @property string $PackageName
 * @property string $PackageVersion
 */
class PackageVersionOutputConfig extends Shape
{
    /**
     * @param array{
     *     MarkLatest?: bool|null,
     *     PackageName: string,
     *     PackageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
