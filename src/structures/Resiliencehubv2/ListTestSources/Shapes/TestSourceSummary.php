<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuccessCriteriaAlarmSummary|null $successCriteriaAlarm
 * @property ObservabilityAlarmSummary|null $observabilityAlarm
 */
class TestSourceSummary extends Shape
{
    /**
     * @param array{
     *     successCriteriaAlarm?: SuccessCriteriaAlarmSummary|null,
     *     observabilityAlarm?: ObservabilityAlarmSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
