<?php

namespace Sunaoka\Aws\Structures\S3Vectors\QueryVectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $fused
 * @property list<Bm25Score>|null $bm25Scores
 * @property float|null $vectorDistance
 */
class QueryScores extends Shape
{
    /**
     * @param array{
     *     fused?: float|null,
     *     bm25Scores?: list<Bm25Score>|null,
     *     vectorDistance?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
