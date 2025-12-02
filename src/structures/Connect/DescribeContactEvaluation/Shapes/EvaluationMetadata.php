<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property string $EvaluatorArn
 * @property string|null $ContactAgentId
 * @property string|null $CalibrationSessionId
 * @property EvaluationScore|null $Score
 * @property AutoEvaluationDetails|null $AutoEvaluation
 * @property EvaluationAcknowledgement|null $Acknowledgement
 * @property EvaluationContactParticipant|null $ContactParticipant
 * @property string|null $SamplingJobId
 */
class EvaluationMetadata extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     EvaluatorArn: string,
     *     ContactAgentId?: string|null,
     *     CalibrationSessionId?: string|null,
     *     Score?: EvaluationScore|null,
     *     AutoEvaluation?: AutoEvaluationDetails|null,
     *     Acknowledgement?: EvaluationAcknowledgement|null,
     *     ContactParticipant?: EvaluationContactParticipant|null,
     *     SamplingJobId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
