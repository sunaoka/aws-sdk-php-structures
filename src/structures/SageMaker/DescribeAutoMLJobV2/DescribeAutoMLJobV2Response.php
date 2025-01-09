<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AutoMLJobName
 * @property string $AutoMLJobArn
 * @property list<Shapes\AutoMLJobChannel> $AutoMLJobInputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property string $RoleArn
 * @property Shapes\AutoMLJobObjective $AutoMLJobObjective
 * @property Shapes\AutoMLProblemTypeConfig $AutoMLProblemTypeConfig
 * @property 'ImageClassification'|'TextClassification'|'TimeSeriesForecasting'|'Tabular'|'TextGeneration' $AutoMLProblemTypeConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property list<Shapes\AutoMLPartialFailureReason> $PartialFailureReasons
 * @property Shapes\AutoMLCandidate $BestCandidate
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $AutoMLJobStatus
 * @property 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining' $AutoMLJobSecondaryStatus
 * @property Shapes\AutoMLJobArtifacts $AutoMLJobArtifacts
 * @property Shapes\AutoMLResolvedAttributes $ResolvedAttributes
 * @property Shapes\ModelDeployConfig $ModelDeployConfig
 * @property Shapes\ModelDeployResult $ModelDeployResult
 * @property Shapes\AutoMLDataSplitConfig $DataSplitConfig
 * @property Shapes\AutoMLSecurityConfig $SecurityConfig
 * @property Shapes\AutoMLComputeConfig $AutoMLComputeConfig
 */
class DescribeAutoMLJobV2Response extends Response
{
}
