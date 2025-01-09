<?php

namespace Sunaoka\Aws\Structures\S3\ListBucketInventoryConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InventoryS3BucketDestination $S3BucketDestination
 */
class InventoryDestination extends Shape
{
    /**
     * @param array{S3BucketDestination: InventoryS3BucketDestination} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
