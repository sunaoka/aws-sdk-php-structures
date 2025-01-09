<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $MarkLatest
 * @property string $PackageName
 * @property string $PackageVersion
 */
class PackageVersionOutputConfig extends Shape
{
    /**
     * @param array{
     *     MarkLatest?: bool,
     *     PackageName: string,
     *     PackageVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
