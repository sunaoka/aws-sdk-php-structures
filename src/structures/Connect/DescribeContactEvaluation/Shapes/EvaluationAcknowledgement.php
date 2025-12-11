<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AcknowledgedTime
 * @property string $AcknowledgedBy
 * @property string|null $AcknowledgerComment
 */
class EvaluationAcknowledgement extends Shape
{
    /**
     * @param array{
     *     AcknowledgedTime: \Aws\Api\DateTimeResult,
     *     AcknowledgedBy: string,
     *     AcknowledgerComment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
