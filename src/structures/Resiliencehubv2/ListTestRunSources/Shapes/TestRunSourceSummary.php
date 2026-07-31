<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TestRunSuccessCriteriaAlarmSummary|null $successCriteriaAlarm
 * @property TestRunObservabilityAlarmSummary|null $observabilityAlarm
 */
class TestRunSourceSummary extends Shape
{
    /**
     * @param array{
     *     successCriteriaAlarm?: TestRunSuccessCriteriaAlarmSummary|null,
     *     observabilityAlarm?: TestRunObservabilityAlarmSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
