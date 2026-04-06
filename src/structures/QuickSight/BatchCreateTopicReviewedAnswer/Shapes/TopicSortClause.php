<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier|null $Operand
 * @property 'ASCENDING'|'DESCENDING'|null $SortDirection
 */
class TopicSortClause extends Shape
{
    /**
     * @param array{
     *     Operand?: Identifier|null,
     *     SortDirection?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
