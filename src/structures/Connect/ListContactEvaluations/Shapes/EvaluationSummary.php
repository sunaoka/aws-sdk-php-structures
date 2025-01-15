<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationId
 * @property string $EvaluationArn
 * @property string $EvaluationFormTitle
 * @property string $EvaluationFormId
 * @property 'DRAFT'|'SUBMITTED' $Status
 * @property string $EvaluatorArn
 * @property EvaluationScore|null $Score
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class EvaluationSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationId: string,
     *     EvaluationArn: string,
     *     EvaluationFormTitle: string,
     *     EvaluationFormId: string,
     *     Status: 'DRAFT'|'SUBMITTED',
     *     EvaluatorArn: string,
     *     Score?: EvaluationScore|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
