<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $status
 * @property string $jobArn
 * @property string|null $jobDescription
 * @property string $roleArn
 * @property string|null $customerEncryptionKeyId
 * @property 'Human'|'Automated' $jobType
 * @property 'ModelEvaluation'|'RagEvaluation'|null $applicationType
 * @property Shapes\EvaluationConfig $evaluationConfig
 * @property Shapes\EvaluationInferenceConfig $inferenceConfig
 * @property Shapes\EvaluationOutputDataConfig $outputDataConfig
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property list<string>|null $failureMessages
 */
class GetEvaluationJobResponse extends Response
{
}
