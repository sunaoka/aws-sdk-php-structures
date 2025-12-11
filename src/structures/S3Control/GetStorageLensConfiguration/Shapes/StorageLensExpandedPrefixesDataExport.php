<?php

namespace Sunaoka\Aws\Structures\S3Control\GetStorageLensConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3BucketDestination|null $S3BucketDestination
 * @property StorageLensTableDestination|null $StorageLensTableDestination
 */
class StorageLensExpandedPrefixesDataExport extends Shape
{
    /**
     * @param array{
     *     S3BucketDestination?: S3BucketDestination|null,
     *     StorageLensTableDestination?: StorageLensTableDestination|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
