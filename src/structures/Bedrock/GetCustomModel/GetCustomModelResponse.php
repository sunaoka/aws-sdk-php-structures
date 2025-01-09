<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $modelArn
 * @property string $modelName
 * @property string $jobName
 * @property string $jobArn
 * @property string $baseModelArn
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION' $customizationType
 * @property string $modelKmsKeyArn
 * @property array<string, string> $hyperParameters
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property Shapes\TrainingMetrics $trainingMetrics
 * @property list<Shapes\ValidatorMetric> $validationMetrics
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\CustomizationConfig $customizationConfig
 */
class GetCustomModelResponse extends Response
{
}
