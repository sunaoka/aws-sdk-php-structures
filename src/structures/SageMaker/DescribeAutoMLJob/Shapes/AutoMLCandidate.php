<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CandidateName
 * @property FinalAutoMLJobObjectiveMetric $FinalAutoMLJobObjectiveMetric
 * @property 'Succeeded'|'Pending'|'Failed' $ObjectiveStatus
 * @property list<AutoMLCandidateStep> $CandidateSteps
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $CandidateStatus
 * @property list<AutoMLContainerDefinition> $InferenceContainers
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property CandidateProperties $CandidateProperties
 * @property array<'CPU'|'GPU', list<AutoMLContainerDefinition>> $InferenceContainerDefinitions
 */
class AutoMLCandidate extends Shape
{
    /**
     * @param array{
     *     CandidateName: string,
     *     FinalAutoMLJobObjectiveMetric?: FinalAutoMLJobObjectiveMetric,
     *     ObjectiveStatus: 'Succeeded'|'Pending'|'Failed',
     *     CandidateSteps: list<AutoMLCandidateStep>,
     *     CandidateStatus: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping',
     *     InferenceContainers?: list<AutoMLContainerDefinition>,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     CandidateProperties?: CandidateProperties,
     *     InferenceContainerDefinitions?: array<'CPU'|'GPU', list<AutoMLContainerDefinition>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
