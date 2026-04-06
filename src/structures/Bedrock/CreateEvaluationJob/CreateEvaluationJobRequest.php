<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string|null $jobDescription
 * @property string|null $clientRequestToken
 * @property string $roleArn
 * @property string|null $customerEncryptionKeyId
 * @property list<Shapes\Tag>|null $jobTags
 * @property 'ModelEvaluation'|'RagEvaluation'|null $applicationType
 * @property Shapes\EvaluationConfig $evaluationConfig
 * @property Shapes\EvaluationInferenceConfig $inferenceConfig
 * @property Shapes\EvaluationOutputDataConfig $outputDataConfig
 */
class CreateEvaluationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobDescription?: string|null,
     *     clientRequestToken?: string|null,
     *     roleArn: string,
     *     customerEncryptionKeyId?: string|null,
     *     jobTags?: list<Shapes\Tag>|null,
     *     applicationType?: 'ModelEvaluation'|'RagEvaluation'|null,
     *     evaluationConfig: Shapes\EvaluationConfig,
     *     inferenceConfig: Shapes\EvaluationInferenceConfig,
     *     outputDataConfig: Shapes\EvaluationOutputDataConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
