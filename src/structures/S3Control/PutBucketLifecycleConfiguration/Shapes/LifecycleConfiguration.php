<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LifecycleRule>|null $Rules
 */
class LifecycleConfiguration extends Shape
{
    /**
     * @param array{Rules?: list<LifecycleRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
