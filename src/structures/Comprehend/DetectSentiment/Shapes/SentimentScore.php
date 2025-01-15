<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Positive
 * @property float|null $Negative
 * @property float|null $Neutral
 * @property float|null $Mixed
 */
class SentimentScore extends Shape
{
    /**
     * @param array{
     *     Positive?: float|null,
     *     Negative?: float|null,
     *     Neutral?: float|null,
     *     Mixed?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
