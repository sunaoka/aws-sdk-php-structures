<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property string $EvaluatorArn
 * @property string $ContactAgentId
 * @property EvaluationScore $Score
 */
class EvaluationMetadata extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     EvaluatorArn: string,
     *     ContactAgentId?: string,
     *     Score?: EvaluationScore
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
