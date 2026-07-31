<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteTestSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SuccessCriteriaAlarmInput|null $successCriteriaAlarm
 * @property ObservabilityAlarmInput|null $observabilityAlarm
 */
class TestSourceInput extends Shape
{
    /**
     * @param array{
     *     successCriteriaAlarm?: SuccessCriteriaAlarmInput|null,
     *     observabilityAlarm?: ObservabilityAlarmInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
