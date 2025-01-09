<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $stateChangedAt
 * @property 'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED' $state
 */
class AssessmentRunStateChange extends Shape
{
    /**
     * @param array{
     *     stateChangedAt: \Aws\Api\DateTimeResult,
     *     state: 'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
