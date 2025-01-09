<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationId
 * @property array<string, Shapes\EvaluationAnswerInput> $Answers
 * @property array<string, Shapes\EvaluationNote> $Notes
 */
class UpdateContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationId: string,
     *     Answers?: array<string, Shapes\EvaluationAnswerInput>,
     *     Notes?: array<string, Shapes\EvaluationNote>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
