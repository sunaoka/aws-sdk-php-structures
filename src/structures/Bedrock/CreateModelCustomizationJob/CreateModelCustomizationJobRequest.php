<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelCustomizationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $customModelName
 * @property string $roleArn
 * @property string $clientRequestToken
 * @property string $baseModelIdentifier
 * @property 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION' $customizationType
 * @property string $customModelKmsKeyId
 * @property list<Shapes\Tag> $jobTags
 * @property list<Shapes\Tag> $customModelTags
 * @property Shapes\TrainingDataConfig $trainingDataConfig
 * @property Shapes\ValidationDataConfig $validationDataConfig
 * @property Shapes\OutputDataConfig $outputDataConfig
 * @property array<string, string> $hyperParameters
 * @property Shapes\VpcConfig $vpcConfig
 * @property Shapes\CustomizationConfig $customizationConfig
 */
class CreateModelCustomizationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     customModelName: string,
     *     roleArn: string,
     *     clientRequestToken?: string,
     *     baseModelIdentifier: string,
     *     customizationType?: 'FINE_TUNING'|'CONTINUED_PRE_TRAINING'|'DISTILLATION',
     *     customModelKmsKeyId?: string,
     *     jobTags?: list<Shapes\Tag>,
     *     customModelTags?: list<Shapes\Tag>,
     *     trainingDataConfig: Shapes\TrainingDataConfig,
     *     validationDataConfig?: Shapes\ValidationDataConfig,
     *     outputDataConfig: Shapes\OutputDataConfig,
     *     hyperParameters?: array<string, string>,
     *     vpcConfig?: Shapes\VpcConfig,
     *     customizationConfig?: Shapes\CustomizationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
