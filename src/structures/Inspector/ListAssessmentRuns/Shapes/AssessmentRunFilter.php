<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namePattern
 * @property list<'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED'>|null $states
 * @property DurationRange|null $durationRange
 * @property list<string>|null $rulesPackageArns
 * @property TimestampRange|null $startTimeRange
 * @property TimestampRange|null $completionTimeRange
 * @property TimestampRange|null $stateChangeTimeRange
 */
class AssessmentRunFilter extends Shape
{
    /**
     * @param array{
     *     namePattern?: string|null,
     *     states?: list<'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED'>|null,
     *     durationRange?: DurationRange|null,
     *     rulesPackageArns?: list<string>|null,
     *     startTimeRange?: TimestampRange|null,
     *     completionTimeRange?: TimestampRange|null,
     *     stateChangeTimeRange?: TimestampRange|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
