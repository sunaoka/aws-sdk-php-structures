<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $DescriptiveMentionIndex
 * @property list<TargetedSentimentMention> $Mentions
 */
class TargetedSentimentEntity extends Shape
{
    /**
     * @param array{
     *     DescriptiveMentionIndex?: list<int>,
     *     Mentions?: list<TargetedSentimentMention>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
