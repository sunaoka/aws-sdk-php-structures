<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property AnchorDateConfiguration $AnchorDateConfiguration
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $MinimumGranularity
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property 'PREVIOUS'|'THIS'|'LAST'|'NOW'|'NEXT' $RelativeDateType
 * @property int $RelativeDateValue
 * @property string $ParameterName
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property ExcludePeriodConfiguration $ExcludePeriodConfiguration
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class RelativeDatesFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     AnchorDateConfiguration: AnchorDateConfiguration,
     *     MinimumGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     TimeGranularity: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     RelativeDateType: 'PREVIOUS'|'THIS'|'LAST'|'NOW'|'NEXT',
     *     RelativeDateValue?: int,
     *     ParameterName?: string,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     ExcludePeriodConfiguration?: ExcludePeriodConfiguration,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
