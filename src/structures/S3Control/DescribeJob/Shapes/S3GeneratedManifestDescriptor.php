<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3InventoryReport_CSV_20211130' $Format
 * @property JobManifestLocation $Location
 */
class S3GeneratedManifestDescriptor extends Shape
{
    /**
     * @param array{
     *     Format?: 'S3InventoryReport_CSV_20211130',
     *     Location?: JobManifestLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
