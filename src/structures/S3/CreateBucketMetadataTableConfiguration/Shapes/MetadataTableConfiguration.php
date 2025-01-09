<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3TablesDestination $S3TablesDestination
 */
class MetadataTableConfiguration extends Shape
{
    /**
     * @param array{S3TablesDestination: S3TablesDestination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
