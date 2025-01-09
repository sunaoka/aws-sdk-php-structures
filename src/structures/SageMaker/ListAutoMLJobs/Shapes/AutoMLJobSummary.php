<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutoMLJobName
 * @property string $AutoMLJobArn
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $AutoMLJobStatus
 * @property 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining' $AutoMLJobSecondaryStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property list<AutoMLPartialFailureReason> $PartialFailureReasons
 */
class AutoMLJobSummary extends Shape
{
    /**
     * @param array{
     *     AutoMLJobName: string,
     *     AutoMLJobArn: string,
     *     AutoMLJobStatus: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping',
     *     AutoMLJobSecondaryStatus: 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     FailureReason?: string,
     *     PartialFailureReasons?: list<AutoMLPartialFailureReason>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
