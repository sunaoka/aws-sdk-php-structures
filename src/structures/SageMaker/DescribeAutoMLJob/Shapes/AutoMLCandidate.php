<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CandidateName
 * @property FinalAutoMLJobObjectiveMetric|null $FinalAutoMLJobObjectiveMetric
 * @property 'Succeeded'|'Pending'|'Failed' $ObjectiveStatus
 * @property list<AutoMLCandidateStep> $CandidateSteps
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $CandidateStatus
 * @property list<AutoMLContainerDefinition>|null $InferenceContainers
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $FailureReason
 * @property CandidateProperties|null $CandidateProperties
 * @property array<'CPU'|'GPU', list<AutoMLContainerDefinition>>|null $InferenceContainerDefinitions
 */
class AutoMLCandidate extends Shape
{
    /**
     * @param array{
     *     CandidateName: string,
     *     FinalAutoMLJobObjectiveMetric?: FinalAutoMLJobObjectiveMetric|null,
     *     ObjectiveStatus: 'Succeeded'|'Pending'|'Failed',
     *     CandidateSteps: list<AutoMLCandidateStep>,
     *     CandidateStatus: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping',
     *     InferenceContainers?: list<AutoMLContainerDefinition>|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string|null,
     *     CandidateProperties?: CandidateProperties|null,
     *     InferenceContainerDefinitions?: array<'CPU'|'GPU', list<AutoMLContainerDefinition>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
