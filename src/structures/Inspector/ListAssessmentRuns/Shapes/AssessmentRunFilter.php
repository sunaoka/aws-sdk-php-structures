<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namePattern
 * @property list<'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED'> $states
 * @property DurationRange $durationRange
 * @property list<string> $rulesPackageArns
 * @property TimestampRange $startTimeRange
 * @property TimestampRange $completionTimeRange
 * @property TimestampRange $stateChangeTimeRange
 */
class AssessmentRunFilter extends Shape
{
    /**
     * @param array{
     *     namePattern?: string,
     *     states?: list<'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED'>,
     *     durationRange?: DurationRange,
     *     rulesPackageArns?: list<string>,
     *     startTimeRange?: TimestampRange,
     *     completionTimeRange?: TimestampRange,
     *     stateChangeTimeRange?: TimestampRange
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
