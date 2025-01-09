<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $failOnFirstDestinationError
 * @property string $bucketPrefix
 * @property string $bucketName
 */
class ErrorHandlingConfig extends Shape
{
    /**
     * @param array{
     *     failOnFirstDestinationError?: bool,
     *     bucketPrefix?: string,
     *     bucketName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
