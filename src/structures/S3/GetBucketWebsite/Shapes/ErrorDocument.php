<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 */
class ErrorDocument extends Shape
{
    /**
     * @param array{Key: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
