<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchCreateTopicReviewedAnswer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier|null $FieldName
 * @property 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null $TimeGranularity
 * @property TopicSortClause|null $Sort
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null $DisplayFormat
 * @property DisplayFormatOptions|null $DisplayFormatOptions
 * @property NamedEntityRef|null $NamedEntity
 */
class TopicIRGroupBy extends Shape
{
    /**
     * @param array{
     *     FieldName?: Identifier|null,
     *     TimeGranularity?: 'SECOND'|'MINUTE'|'HOUR'|'DAY'|'WEEK'|'MONTH'|'QUARTER'|'YEAR'|null,
     *     Sort?: TopicSortClause|null,
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null,
     *     DisplayFormatOptions?: DisplayFormatOptions|null,
     *     NamedEntity?: NamedEntityRef|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
