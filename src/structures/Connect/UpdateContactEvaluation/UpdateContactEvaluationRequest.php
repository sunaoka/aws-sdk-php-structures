<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $EvaluationId
 * @property array<string, Shapes\EvaluationAnswerInput>|null $Answers
 * @property array<string, Shapes\EvaluationNote>|null $Notes
 */
class UpdateContactEvaluationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     EvaluationId: string,
     *     Answers?: array<string, Shapes\EvaluationAnswerInput>|null,
     *     Notes?: array<string, Shapes\EvaluationNote>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
