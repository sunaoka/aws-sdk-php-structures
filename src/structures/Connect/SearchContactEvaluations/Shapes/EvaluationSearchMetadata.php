<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property string $EvaluatorArn
 * @property string|null $ContactAgentId
 * @property string|null $CalibrationSessionId
 * @property double|null $ScorePercentage
 * @property bool|null $ScoreAutomaticFail
 * @property bool|null $ScoreNotApplicable
 * @property bool|null $AutoEvaluationEnabled
 * @property 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null $AutoEvaluationStatus
 * @property \Aws\Api\DateTimeResult|null $AcknowledgedTime
 * @property string|null $AcknowledgedBy
 * @property string|null $AcknowledgerComment
 * @property string|null $SamplingJobId
 * @property string|null $ReviewId
 * @property 'AGENT'|'SYSTEM'|'CUSTOM_BOT'|null $ContactParticipantRole
 * @property string|null $ContactParticipantId
 */
class EvaluationSearchMetadata extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     EvaluatorArn: string,
     *     ContactAgentId?: string|null,
     *     CalibrationSessionId?: string|null,
     *     ScorePercentage?: double|null,
     *     ScoreAutomaticFail?: bool|null,
     *     ScoreNotApplicable?: bool|null,
     *     AutoEvaluationEnabled?: bool|null,
     *     AutoEvaluationStatus?: 'IN_PROGRESS'|'FAILED'|'SUCCEEDED'|null,
     *     AcknowledgedTime?: \Aws\Api\DateTimeResult|null,
     *     AcknowledgedBy?: string|null,
     *     AcknowledgerComment?: string|null,
     *     SamplingJobId?: string|null,
     *     ReviewId?: string|null,
     *     ContactParticipantRole?: 'AGENT'|'SYSTEM'|'CUSTOM_BOT'|null,
     *     ContactParticipantId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
