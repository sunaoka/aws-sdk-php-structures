<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterDescription
 * @property 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER' $FilterClass
 * @property string $FilterName
 * @property list<string> $FilterSynonyms
 * @property string $OperandFieldName
 * @property 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER' $FilterType
 * @property TopicCategoryFilter $CategoryFilter
 * @property TopicNumericEqualityFilter $NumericEqualityFilter
 * @property TopicNumericRangeFilter $NumericRangeFilter
 * @property TopicDateRangeFilter $DateRangeFilter
 * @property TopicRelativeDateFilter $RelativeDateFilter
 */
class TopicFilter extends Shape
{
    /**
     * @param array{
     *     FilterDescription?: string,
     *     FilterClass?: 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER',
     *     FilterName: string,
     *     FilterSynonyms?: list<string>,
     *     OperandFieldName: string,
     *     FilterType?: 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER',
     *     CategoryFilter?: TopicCategoryFilter,
     *     NumericEqualityFilter?: TopicNumericEqualityFilter,
     *     NumericRangeFilter?: TopicNumericRangeFilter,
     *     DateRangeFilter?: TopicDateRangeFilter,
     *     RelativeDateFilter?: TopicRelativeDateFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
