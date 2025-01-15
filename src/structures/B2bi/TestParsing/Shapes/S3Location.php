<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucketName
 * @property string|null $key
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucketName?: string|null,
     *     key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
