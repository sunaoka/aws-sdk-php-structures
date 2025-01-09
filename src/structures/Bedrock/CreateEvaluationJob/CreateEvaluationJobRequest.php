<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $jobDescription
 * @property string $clientRequestToken
 * @property string $roleArn
 * @property string $customerEncryptionKeyId
 * @property list<Shapes\Tag> $jobTags
 * @property 'ModelEvaluation'|'RagEvaluation' $applicationType
 * @property Shapes\EvaluationConfig $evaluationConfig
 * @property Shapes\EvaluationInferenceConfig $inferenceConfig
 * @property Shapes\EvaluationOutputDataConfig $outputDataConfig
 */
class CreateEvaluationJobRequest extends Request
{
    /**
     * @param array{
     *     jobName: string,
     *     jobDescription?: string,
     *     clientRequestToken?: string,
     *     roleArn: string,
     *     customerEncryptionKeyId?: string,
     *     jobTags?: list<Shapes\Tag>,
     *     applicationType?: 'ModelEvaluation'|'RagEvaluation',
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
