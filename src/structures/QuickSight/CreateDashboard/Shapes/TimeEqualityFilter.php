<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property \Aws\Api\DateTimeResult $Value
 * @property string $ParameterName
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property RollingDateConfiguration $RollingDate
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class TimeEqualityFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     Value?: \Aws\Api\DateTimeResult,
     *     ParameterName?: string,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     RollingDate?: RollingDateConfiguration,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
