<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Index
 * @property list<TargetedSentimentEntity> $Entities
 */
class BatchDetectTargetedSentimentItemResult extends Shape
{
    /**
     * @param array{
     *     Index?: int,
     *     Entities?: list<TargetedSentimentEntity>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
