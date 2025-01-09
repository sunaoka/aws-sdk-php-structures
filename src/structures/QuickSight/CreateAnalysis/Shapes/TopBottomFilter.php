<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property int $Limit
 * @property list<AggregationSortConfiguration> $AggregationSortConfigurations
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property string $ParameterName
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class TopBottomFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Limit?: int,
     *     AggregationSortConfigurations: list<AggregationSortConfiguration>,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     ParameterName?: string,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
