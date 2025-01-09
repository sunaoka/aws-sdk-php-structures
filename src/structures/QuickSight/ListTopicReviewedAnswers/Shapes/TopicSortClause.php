<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier $Operand
 * @property 'ASCENDING'|'DESCENDING' $SortDirection
 */
class TopicSortClause extends Shape
{
    /**
     * @param array{
     *     Operand?: Identifier,
     *     SortDirection?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
