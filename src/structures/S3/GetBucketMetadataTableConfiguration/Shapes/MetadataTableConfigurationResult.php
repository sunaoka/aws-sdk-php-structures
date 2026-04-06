<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3TablesDestinationResult $S3TablesDestinationResult
 */
class MetadataTableConfigurationResult extends Shape
{
    /**
     * @param array{S3TablesDestinationResult: S3TablesDestinationResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
