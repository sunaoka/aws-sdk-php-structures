<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $failOnFirstDestinationError
 * @property string|null $bucketPrefix
 * @property string|null $bucketName
 */
class ErrorHandlingConfig extends Shape
{
    /**
     * @param array{
     *     failOnFirstDestinationError?: bool|null,
     *     bucketPrefix?: string|null,
     *     bucketName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
