<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Positive
 * @property float $Negative
 * @property float $Neutral
 * @property float $Mixed
 */
class SentimentScore extends Shape
{
    /**
     * @param array{
     *     Positive?: float,
     *     Negative?: float,
     *     Neutral?: float,
     *     Mixed?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
