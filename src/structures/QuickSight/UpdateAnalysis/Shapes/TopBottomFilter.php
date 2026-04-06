<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property int|null $Limit
 * @property list<AggregationSortConfiguration> $AggregationSortConfigurations
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 * @property string|null $ParameterName
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class TopBottomFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Limit?: int|null,
     *     AggregationSortConfigurations: list<AggregationSortConfiguration>,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     ParameterName?: string|null,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
