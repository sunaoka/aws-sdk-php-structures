<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<float>|null $float32
 */
class VectorData extends Shape
{
    /**
     * @param array{float32?: list<float>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
