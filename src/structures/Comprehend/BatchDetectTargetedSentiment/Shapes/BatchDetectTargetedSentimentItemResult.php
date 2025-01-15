<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Index
 * @property list<TargetedSentimentEntity>|null $Entities
 */
class BatchDetectTargetedSentimentItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int|null,
     *     Entities?: list<TargetedSentimentEntity>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
