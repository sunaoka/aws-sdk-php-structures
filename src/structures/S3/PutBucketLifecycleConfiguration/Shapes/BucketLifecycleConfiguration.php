<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LifecycleRule> $Rules
 */
class BucketLifecycleConfiguration extends Shape
{
    /**
     * @param array{Rules: list<LifecycleRule>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
