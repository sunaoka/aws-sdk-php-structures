<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $outputModelName
 * @property string $outputModelArn
 * @property string $clientRequestToken
 * @property string $roleArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $status
 * @property string $failureMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $baseModelArn
 * @property array<string, string> $hyperParameters
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION' $customizationType
 * @property string $outputModelKmsKeyArn
 * @property Shapes\TrainingMetrics $trainingMetrics
 * @property list<Shapes\ValidatorMetric> $validationMetrics
 * @property Shapes\VpcConfig $vpcConfig
 * @property Shapes\CustomizationConfig $customizationConfig
 */
class GetModelCustomizationJobResponse extends Response
{
}
