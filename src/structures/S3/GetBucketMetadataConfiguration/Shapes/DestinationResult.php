<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws'|'customer'|null $TableBucketType
 * @property string|null $TableBucketArn
 * @property string|null $TableNamespace
 */
class DestinationResult extends Shape
{
    /**
     * @param array{
     *     TableBucketType?: 'aws'|'customer'|null,
     *     TableBucketArn?: string|null,
     *     TableNamespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
