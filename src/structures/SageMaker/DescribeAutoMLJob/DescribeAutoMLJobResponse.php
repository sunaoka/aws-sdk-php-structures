<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AutoMLJobName
 * @property string $AutoMLJobArn
 * @property list<Shapes\AutoMLChannel> $InputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property string $RoleArn
 * @property Shapes\AutoMLJobObjective|null $AutoMLJobObjective
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 * @property Shapes\AutoMLJobConfig|null $AutoMLJobConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string|null $FailureReason
 * @property list<Shapes\AutoMLPartialFailureReason>|null $PartialFailureReasons
 * @property Shapes\AutoMLCandidate|null $BestCandidate
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $AutoMLJobStatus
 * @property 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining' $AutoMLJobSecondaryStatus
 * @property bool|null $GenerateCandidateDefinitionsOnly
 * @property Shapes\AutoMLJobArtifacts|null $AutoMLJobArtifacts
 * @property Shapes\ResolvedAttributes|null $ResolvedAttributes
 * @property Shapes\ModelDeployConfig|null $ModelDeployConfig
 * @property Shapes\ModelDeployResult|null $ModelDeployResult
 */
class DescribeAutoMLJobResponse extends Response
{
}
