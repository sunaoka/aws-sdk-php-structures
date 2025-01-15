<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3BatchOperations_CSV_20180820'|'S3InventoryReport_CSV_20161130' $Format
 * @property list<'Ignore'|'Bucket'|'Key'|'VersionId'>|null $Fields
 */
class JobManifestSpec extends Shape
{
    /**
     * @param array{
     *     Format: 'S3BatchOperations_CSV_20180820'|'S3InventoryReport_CSV_20161130',
     *     Fields?: list<'Ignore'|'Bucket'|'Key'|'VersionId'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
