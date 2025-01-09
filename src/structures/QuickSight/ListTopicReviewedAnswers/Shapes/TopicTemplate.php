<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateType
 * @property list<Slot> $Slots
 */
class TopicTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateType?: string,
     *     Slots?: list<Slot>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
