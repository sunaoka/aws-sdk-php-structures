<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListTopicReviewedAnswers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldName
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 */
class AggregationPartitionBy extends Shape
{
    /**
     * @param array{
     *     FieldName?: string|null,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
