<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AutoMLJobName
 * @property string $AutoMLJobArn
 * @property list<Shapes\AutoMLJobChannel> $AutoMLJobInputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property string $RoleArn
 * @property Shapes\AutoMLJobObjective|null $AutoMLJobObjective
 * @property Shapes\AutoMLProblemTypeConfig|null $AutoMLProblemTypeConfig
 * @property 'ImageClassification'|'TextClassification'|'TimeSeriesForecasting'|'Tabular'|'TextGeneration'|null $AutoMLProblemTypeConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $FailureReason
 * @property list<Shapes\AutoMLPartialFailureReason>|null $PartialFailureReasons
 * @property Shapes\AutoMLCandidate|null $BestCandidate
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $AutoMLJobStatus
 * @property 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining' $AutoMLJobSecondaryStatus
 * @property Shapes\AutoMLJobArtifacts|null $AutoMLJobArtifacts
 * @property Shapes\AutoMLResolvedAttributes|null $ResolvedAttributes
 * @property Shapes\ModelDeployConfig|null $ModelDeployConfig
 * @property Shapes\ModelDeployResult|null $ModelDeployResult
 * @property Shapes\AutoMLDataSplitConfig|null $DataSplitConfig
 * @property Shapes\AutoMLSecurityConfig|null $SecurityConfig
 * @property Shapes\AutoMLComputeConfig|null $AutoMLComputeConfig
 */
class DescribeAutoMLJobV2Response extends Response
{
}
