<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VisualId
 * @property 'PRIMARY'|'COMPLIMENTARY'|'MULTI_INTENT'|'FALLBACK'|'FRAGMENT' $Role
 * @property TopicIR $Ir
 * @property list<TopicVisual> $SupportingVisuals
 */
class TopicVisual extends Shape
{
    /**
     * @param array{
     *     VisualId?: string,
     *     Role?: 'PRIMARY'|'COMPLIMENTARY'|'MULTI_INTENT'|'FALLBACK'|'FRAGMENT',
     *     Ir?: TopicIR,
     *     SupportingVisuals?: list<TopicVisual>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
