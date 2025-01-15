<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property string|null $jobName
 * @property string $jobArn
 * @property string $baseModelArn
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|null $customizationType
 * @property string|null $modelKmsKeyArn
 * @property array<string, string>|null $hyperParameters
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig|null $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property Shapes\TrainingMetrics|null $trainingMetrics
 * @property list<Shapes\ValidatorMetric>|null $validationMetrics
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\CustomizationConfig|null $customizationConfig
 */
class GetCustomModelResponse extends Response
{
}
