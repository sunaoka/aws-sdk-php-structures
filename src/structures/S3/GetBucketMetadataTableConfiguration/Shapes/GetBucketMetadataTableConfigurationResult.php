<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MetadataTableConfigurationResult $MetadataTableConfigurationResult
 * @property string $Status
 * @property ErrorDetails|null $Error
 */
class GetBucketMetadataTableConfigurationResult extends Shape
{
    /**
     * @param array{
     *     MetadataTableConfigurationResult: MetadataTableConfigurationResult,
     *     Status: string,
     *     Error?: ErrorDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
