<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier $FieldName
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR' $TimeGranularity
 * @property TopicSortClause $Sort
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING' $DisplayFormat
 * @property DisplayFormatOptions $DisplayFormatOptions
 * @property NamedEntityRef $NamedEntity
 */
class TopicIRGroupBy extends Shape
{
    /**
     * @param array{
     *     FieldName?: Identifier,
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR',
     *     Sort?: TopicSortClause,
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING',
     *     DisplayFormatOptions?: DisplayFormatOptions,
     *     NamedEntity?: NamedEntityRef
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
