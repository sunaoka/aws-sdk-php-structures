<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpErrorCodeReturnedEquals
 * @property string $KeyPrefixEquals
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     HttpErrorCodeReturnedEquals?: string,
     *     KeyPrefixEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
