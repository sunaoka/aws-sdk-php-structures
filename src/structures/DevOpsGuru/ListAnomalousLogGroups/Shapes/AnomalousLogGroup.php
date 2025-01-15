<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogGroupName
 * @property \Aws\Api\DateTimeResult|null $ImpactStartTime
 * @property \Aws\Api\DateTimeResult|null $ImpactEndTime
 * @property int|null $NumberOfLogLinesScanned
 * @property list<LogAnomalyShowcase>|null $LogAnomalyShowcases
 */
class AnomalousLogGroup extends Shape
{
    /**
     * @param array{
     *     LogGroupName?: string|null,
     *     ImpactStartTime?: \Aws\Api\DateTimeResult|null,
     *     ImpactEndTime?: \Aws\Api\DateTimeResult|null,
     *     NumberOfLogLinesScanned?: int|null,
     *     LogAnomalyShowcases?: list<LogAnomalyShowcase>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
