<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $status
 * @property string $jobArn
 * @property string $jobDescription
 * @property string $roleArn
 * @property string $customerEncryptionKeyId
 * @property 'Human'|'Automated' $jobType
 * @property 'ModelEvaluation'|'RagEvaluation' $applicationType
 * @property Shapes\EvaluationConfig $evaluationConfig
 * @property Shapes\EvaluationInferenceConfig $inferenceConfig
 * @property Shapes\EvaluationOutputDataConfig $outputDataConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property list<string> $failureMessages
 */
class GetEvaluationJobResponse extends Response
{
}
