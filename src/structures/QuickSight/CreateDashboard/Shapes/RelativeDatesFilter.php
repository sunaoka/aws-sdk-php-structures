<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property AnchorDateConfiguration $AnchorDateConfiguration
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $MinimumGranularity
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property 'PREVIOUS'|'THIS'|'LAST'|'NOW'|'NEXT' $RelativeDateType
 * @property int|null $RelativeDateValue
 * @property string|null $ParameterName
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property ExcludePeriodConfiguration|null $ExcludePeriodConfiguration
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class RelativeDatesFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     AnchorDateConfiguration: AnchorDateConfiguration,
     *     MinimumGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     TimeGranularity: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     RelativeDateType: 'PREVIOUS'|'THIS'|'LAST'|'NOW'|'NEXT',
     *     RelativeDateValue?: int|null,
     *     ParameterName?: string|null,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     ExcludePeriodConfiguration?: ExcludePeriodConfiguration|null,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
