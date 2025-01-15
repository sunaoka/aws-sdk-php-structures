<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateType
 * @property list<Slot>|null $Slots
 */
class TopicTemplate extends Shape
{
    /**
     * @param array{
     *     TemplateType?: string|null,
     *     Slots?: list<Slot>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
