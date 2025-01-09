<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutPutS3Location $OutputS3Location
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class PackageImportJobOutput extends Shape
{
    /**
     * @param array{
     *     OutputS3Location: OutPutS3Location,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
