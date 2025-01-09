<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AutoMLJobName
 * @property string $AutoMLJobArn
 * @property list<Shapes\AutoMLChannel> $InputDataConfig
 * @property Shapes\AutoMLOutputDataConfig $OutputDataConfig
 * @property string $RoleArn
 * @property Shapes\AutoMLJobObjective $AutoMLJobObjective
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 * @property Shapes\AutoMLJobConfig $AutoMLJobConfig
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property list<Shapes\AutoMLPartialFailureReason> $PartialFailureReasons
 * @property Shapes\AutoMLCandidate $BestCandidate
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $AutoMLJobStatus
 * @property 'Starting'|'MaxCandidatesReached'|'Failed'|'Stopped'|'MaxAutoMLJobRuntimeReached'|'Stopping'|'CandidateDefinitionsGenerated'|'Completed'|'ExplainabilityError'|'DeployingModel'|'ModelDeploymentError'|'GeneratingModelInsightsReport'|'ModelInsightsError'|'AnalyzingData'|'FeatureEngineering'|'ModelTuning'|'GeneratingExplainabilityReport'|'TrainingModels'|'PreTraining' $AutoMLJobSecondaryStatus
 * @property bool $GenerateCandidateDefinitionsOnly
 * @property Shapes\AutoMLJobArtifacts $AutoMLJobArtifacts
 * @property Shapes\ResolvedAttributes $ResolvedAttributes
 * @property Shapes\ModelDeployConfig $ModelDeployConfig
 * @property Shapes\ModelDeployResult $ModelDeployResult
 */
class DescribeAutoMLJobResponse extends Response
{
}
