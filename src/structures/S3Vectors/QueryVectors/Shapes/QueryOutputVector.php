<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $distance
 * @property string $key
 * @property VectorMetadata|null $metadata
 */
class QueryOutputVector extends Shape
{
    /**
     * @param array{
     *     distance?: float|null,
     *     key: string,
     *     metadata?: VectorMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
