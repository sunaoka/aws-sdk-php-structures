<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataConfigurationResult $MetadataConfigurationResult
 */
class GetBucketMetadataConfigurationResult extends Shape
{
    /**
     * @param array{MetadataConfigurationResult: MetadataConfigurationResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
