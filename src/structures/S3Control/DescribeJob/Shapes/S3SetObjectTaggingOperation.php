<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<S3Tag>|null $TagSet
 */
class S3SetObjectTaggingOperation extends Shape
{
    /**
     * @param array{TagSet?: list<S3Tag>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
