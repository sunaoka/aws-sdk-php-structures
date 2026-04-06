<?php

namespace Sunaoka\Aws\Structures\Connect\SubmitContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationId
 * @property array<string, Shapes\EvaluationAnswerInput>|null $Answers
 * @property array<string, Shapes\EvaluationNote>|null $Notes
 * @property Shapes\EvaluatorUserUnion|null $SubmittedBy
 */
class SubmitContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationId: string,
     *     Answers?: array<string, Shapes\EvaluationAnswerInput>|null,
     *     Notes?: array<string, Shapes\EvaluationNote>|null,
     *     SubmittedBy?: Shapes\EvaluatorUserUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
