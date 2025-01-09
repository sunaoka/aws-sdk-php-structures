<?php

namespace Sunaoka\Aws\Structures\WorkMailMessageFlow\PutRawMessageContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Reference $s3Reference
 */
class RawMessageContent extends Shape
{
    /**
     * @param array{s3Reference: S3Reference} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
