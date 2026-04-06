<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VisualId
 * @property 'PRIMARY'|'COMPLIMENTARY'|'MULTI_INTENT'|'FALLBACK'|'FRAGMENT'|null $Role
 * @property TopicIR|null $Ir
 * @property list<TopicVisual>|null $SupportingVisuals
 */
class TopicVisual extends Shape
{
    /**
     * @param array{
     *     VisualId?: string|null,
     *     Role?: 'PRIMARY'|'COMPLIMENTARY'|'MULTI_INTENT'|'FALLBACK'|'FRAGMENT'|null,
     *     Ir?: TopicIR|null,
     *     SupportingVisuals?: list<TopicVisual>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
