<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BaseModelArn
 * @property bool|null $AcceptEula
 * @property 'FineTuning'|'Evaluation' $JobType
 * @property 'SFT'|'DPO'|'RLVR'|'RLAIF'|null $CustomizationTechnique
 * @property 'LORA'|null $Peft
 * @property 'LLMAJEvaluation'|'CustomScorerEvaluation'|'BenchmarkEvaluation'|null $EvaluationType
 * @property string|null $EvaluatorArn
 */
class ServerlessJobConfig extends Shape
{
    /**
     * @param array{
     *     BaseModelArn: string,
     *     AcceptEula?: bool|null,
     *     JobType: 'FineTuning'|'Evaluation',
     *     CustomizationTechnique?: 'SFT'|'DPO'|'RLVR'|'RLAIF'|null,
     *     Peft?: 'LORA'|null,
     *     EvaluationType?: 'LLMAJEvaluation'|'CustomScorerEvaluation'|'BenchmarkEvaluation'|null,
     *     EvaluatorArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
