<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationId
 * @property string $EvaluationArn
 * @property string $EvaluationFormTitle
 * @property string $EvaluationFormId
 * @property string|null $CalibrationSessionId
 * @property 'DRAFT'|'SUBMITTED' $Status
 * @property bool|null $AutoEvaluationEnabled
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $AutoEvaluationStatus
 * @property string $EvaluatorArn
 * @property EvaluationScore|null $Score
 * @property EvaluationAcknowledgementSummary|null $Acknowledgement
 * @property 'STANDARD'|'CALIBRATION'|null $EvaluationType
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
     *     CalibrationSessionId?: string|null,
     *     Status: 'DRAFT'|'SUBMITTED',
     *     AutoEvaluationEnabled?: bool|null,
     *     AutoEvaluationStatus?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     EvaluatorArn: string,
     *     Score?: EvaluationScore|null,
     *     Acknowledgement?: EvaluationAcknowledgementSummary|null,
     *     EvaluationType?: 'STANDARD'|'CALIBRATION'|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
