<?php

namespace Sunaoka\Aws\Structures\Comprehend\BatchDetectTargetedSentiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $DescriptiveMentionIndex
 * @property list<TargetedSentimentMention>|null $Mentions
 */
class TargetedSentimentEntity extends Shape
{
    /**
     * @param array{
     *     DescriptiveMentionIndex?: list<int>|null,
     *     Mentions?: list<TargetedSentimentMention>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
