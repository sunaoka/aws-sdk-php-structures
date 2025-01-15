<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketWebsite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpErrorCodeReturnedEquals
 * @property string|null $KeyPrefixEquals
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     HttpErrorCodeReturnedEquals?: string|null,
     *     KeyPrefixEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
