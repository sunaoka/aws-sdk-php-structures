<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomalousLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogGroupName
 * @property \Aws\Api\DateTimeResult $ImpactStartTime
 * @property \Aws\Api\DateTimeResult $ImpactEndTime
 * @property int $NumberOfLogLinesScanned
 * @property list<LogAnomalyShowcase> $LogAnomalyShowcases
 */
class AnomalousLogGroup extends Shape
{
    /**
     * @param array{
     *     LogGroupName?: string,
     *     ImpactStartTime?: \Aws\Api\DateTimeResult,
     *     ImpactEndTime?: \Aws\Api\DateTimeResult,
     *     NumberOfLogLinesScanned?: int,
     *     LogAnomalyShowcases?: list<LogAnomalyShowcase>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
