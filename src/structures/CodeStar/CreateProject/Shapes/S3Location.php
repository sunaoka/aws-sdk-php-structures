<?php

namespace Sunaoka\Aws\Structures\CodeStar\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketName
 * @property string|null $bucketKey
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     bucketKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
