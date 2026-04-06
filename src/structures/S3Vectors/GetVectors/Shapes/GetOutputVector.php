<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property VectorData|null $data
 * @property VectorMetadata|null $metadata
 */
class GetOutputVector extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     data?: VectorData|null,
     *     metadata?: VectorMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
