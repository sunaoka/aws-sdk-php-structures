<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AcknowledgedTime
 * @property string|null $AcknowledgedBy
 * @property string|null $AcknowledgerComment
 */
class EvaluationAcknowledgementSummary extends Shape
{
    /**
     * @param array{
     *     AcknowledgedTime?: \Aws\Api\DateTimeResult|null,
     *     AcknowledgedBy?: string|null,
     *     AcknowledgerComment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
