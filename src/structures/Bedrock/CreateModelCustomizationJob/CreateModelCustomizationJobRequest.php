<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $customModelName
 * @property string $roleArn
 * @property string|null $clientRequestToken
 * @property string $baseModelIdentifier
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|'REINFORCEMENT_FINE_TUNING'|'IMPORTED'|null $customizationType
 * @property string|null $customModelKmsKeyId
 * @property list<Shapes\Tag>|null $jobTags
 * @property list<Shapes\Tag>|null $customModelTags
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig|null $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property array<string, string>|null $hyperParameters
 * @property Shapes\VpcConfig|null $vpcConfig
 * @property Shapes\CustomizationConfig|null $customizationConfig
 */
class CreateModelCustomizationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     customModelName: string,
     *     roleArn: string,
     *     clientRequestToken?: string|null,
     *     baseModelIdentifier: string,
     *     customizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION'|'REINFORCEMENT_FINE_TUNING'|'IMPORTED'|null,
     *     customModelKmsKeyId?: string|null,
     *     jobTags?: list<Shapes\Tag>|null,
     *     customModelTags?: list<Shapes\Tag>|null,
     *     trainingDataConfig: Shapes\TrainingDataConfig,
     *     validationDataConfig?: Shapes\ValidationDataConfig|null,
     *     outputDataConfig: Shapes\OutputDataConfig,
     *     hyperParameters?: array<string, string>|null,
     *     vpcConfig?: Shapes\VpcConfig|null,
     *     customizationConfig?: Shapes\CustomizationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
