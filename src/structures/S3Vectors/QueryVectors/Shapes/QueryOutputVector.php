<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property VectorData|null $data
 * @property VectorMetadata|null $metadata
 * @property float|null $distance
 */
class QueryOutputVector extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     data?: VectorData|null,
     *     metadata?: VectorMetadata|null,
     *     distance?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
