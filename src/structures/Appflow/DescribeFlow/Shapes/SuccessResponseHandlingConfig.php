<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketPrefix
 * @property string $bucketName
 */
class SuccessResponseHandlingConfig extends Shape
{
    /**
     * @param array{
     *     bucketPrefix?: string,
     *     bucketName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
