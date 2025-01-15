<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property string $EvaluatorArn
 * @property string|null $ContactAgentId
 * @property EvaluationScore|null $Score
 */
class EvaluationMetadata extends Shape
{
    /**
     * @param array{
     *     ContactId: string,
     *     EvaluatorArn: string,
     *     ContactAgentId?: string|null,
     *     Score?: EvaluationScore|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
