<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PostText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sentimentLabel
 * @property string|null $sentimentScore
 */
class SentimentResponse extends Shape
{
    /**
     * @param array{
     *     sentimentLabel?: string|null,
     *     sentimentScore?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
