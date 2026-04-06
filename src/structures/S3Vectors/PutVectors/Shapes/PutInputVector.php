<?php

namespace Sunaoka\Aws\Structures\S3Vectors\PutVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property VectorData $data
 * @property VectorMetadata|null $metadata
 */
class PutInputVector extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     data: VectorData,
     *     metadata?: VectorMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
