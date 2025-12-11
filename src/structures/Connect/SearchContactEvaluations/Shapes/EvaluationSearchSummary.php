<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationId
 * @property string $EvaluationArn
 * @property string|null $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property string|null $EvaluationFormTitle
 * @property EvaluationSearchMetadata $Metadata
 * @property 'DRAFT'|'SUBMITTED' $Status
 * @property 'STANDARD'|'CALIBRATION'|null $EvaluationType
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property array<string, string>|null $Tags
 */
class EvaluationSearchSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationId: string,
     *     EvaluationArn: string,
     *     EvaluationFormId?: string|null,
     *     EvaluationFormVersion: int,
     *     EvaluationFormTitle?: string|null,
     *     Metadata: EvaluationSearchMetadata,
     *     Status: 'DRAFT'|'SUBMITTED',
     *     EvaluationType?: 'STANDARD'|'CALIBRATION'|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
