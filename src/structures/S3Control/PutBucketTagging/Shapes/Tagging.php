<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketTagging\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Tag> $TagSet
 */
class Tagging extends Shape
{
    /**
     * @param array{TagSet: list<S3Tag>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
