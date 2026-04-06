<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property string $outputModelName
 * @property string|null $outputModelArn
 * @property string|null $clientRequestToken
 * @property string $roleArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $status
 * @property string|null $failureMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property string $baseModelArn
 * @property array<string, string>|null $hyperParameters
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null $customizationType
 * @property string|null $outputModelKmsKeyArn
 * @property Shapes\TrainingMetrics|null $trainingMetrics
 * @property list<Shapes\ValidatorMetric>|null $validationMetrics
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property Shapes\CustomizationConfig|null $customizationConfig
 */
class GetModelCustomizationJobResponse extends Response
{
}
