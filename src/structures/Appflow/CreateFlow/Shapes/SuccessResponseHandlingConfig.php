<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketPrefix
 * @property string|null $bucketName
 */
class SuccessResponseHandlingConfig extends Shape
{
    /**
     * @param array{
     *     bucketPrefix?: string|null,
     *     bucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
