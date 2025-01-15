<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilterDescription
 * @property 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER'|null $FilterClass
 * @property string $FilterName
 * @property list<string>|null $FilterSynonyms
 * @property string $OperandFieldName
 * @property 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|null $FilterType
 * @property TopicCategoryFilter|null $CategoryFilter
 * @property TopicNumericEqualityFilter|null $NumericEqualityFilter
 * @property TopicNumericRangeFilter|null $NumericRangeFilter
 * @property TopicDateRangeFilter|null $DateRangeFilter
 * @property TopicRelativeDateFilter|null $RelativeDateFilter
 */
class TopicFilter extends Shape
{
    /**
     * @param array{
     *     FilterDescription?: string|null,
     *     FilterClass?: 'ENFORCED_VALUE_FILTER'|'CONDITIONAL_VALUE_FILTER'|'NAMED_VALUE_FILTER'|null,
     *     FilterName: string,
     *     FilterSynonyms?: list<string>|null,
     *     OperandFieldName: string,
     *     FilterType?: 'CATEGORY_FILTER'|'NUMERIC_EQUALITY_FILTER'|'NUMERIC_RANGE_FILTER'|'DATE_RANGE_FILTER'|'RELATIVE_DATE_FILTER'|null,
     *     CategoryFilter?: TopicCategoryFilter|null,
     *     NumericEqualityFilter?: TopicNumericEqualityFilter|null,
     *     NumericRangeFilter?: TopicNumericRangeFilter|null,
     *     DateRangeFilter?: TopicDateRangeFilter|null,
     *     RelativeDateFilter?: TopicRelativeDateFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
