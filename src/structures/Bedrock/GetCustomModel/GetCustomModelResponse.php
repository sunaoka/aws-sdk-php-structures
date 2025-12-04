<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property string|null $jobName
 * @property string|null $jobArn
 * @property string|null $baseModelArn
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|'REINFORCEMENT_FINE_TUNING'|'IMPORTED'|null $customizationType
 * @property string|null $modelKmsKeyArn
 * @property array<string, string>|null $hyperParameters
 * @property Shapes\TrainingDataConfig|null $trainingDataConfig
 * @property Shapes\ValidationDataConfig|null $validationDataConfig
 * @property Shapes\OutputDataConfig|null $outputDataConfig
 * @property Shapes\TrainingMetrics|null $trainingMetrics
 * @property list<Shapes\ValidatorMetric>|null $validationMetrics
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\CustomizationConfig|null $customizationConfig
 * @property 'Active'|'Creating'|'Failed'|null $modelStatus
 * @property string|null $failureMessage
 */
class GetCustomModelResponse extends Response
{
}
