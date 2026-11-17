<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metadataKey
 * @property float $score
 */
class Bm25Score extends Shape
{
    /**
     * @param array{
     *     metadataKey: string,
     *     score: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
