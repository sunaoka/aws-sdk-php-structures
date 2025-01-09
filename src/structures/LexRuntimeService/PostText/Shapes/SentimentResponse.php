<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sentimentLabel
 * @property string $sentimentScore
 */
class SentimentResponse extends Shape
{
    /**
     * @param array{
     *     sentimentLabel?: string,
     *     sentimentScore?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
