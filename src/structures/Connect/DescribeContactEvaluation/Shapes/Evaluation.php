<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationId
 * @property string $EvaluationArn
 * @property EvaluationMetadata $Metadata
 * @property array<string, EvaluationAnswerOutput> $Answers
 * @property array<string, EvaluationNote> $Notes
 * @property 'DRAFT'|'SUBMITTED' $Status
 * @property array<string, EvaluationScore>|null $Scores
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'STANDARD'|'CALIBRATION'|null $EvaluationType
 * @property array<string, string>|null $Tags
 */
class Evaluation extends Shape
{
    /**
     * @param array{
     *     EvaluationId: string,
     *     EvaluationArn: string,
     *     Metadata: EvaluationMetadata,
     *     Answers: array<string, EvaluationAnswerOutput>,
     *     Notes: array<string, EvaluationNote>,
     *     Status: 'DRAFT'|'SUBMITTED',
     *     Scores?: array<string, EvaluationScore>|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     EvaluationType?: 'STANDARD'|'CALIBRATION'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
