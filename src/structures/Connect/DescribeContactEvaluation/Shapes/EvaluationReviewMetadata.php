<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReviewId
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property list<EvaluationReviewRequestComment> $ReviewRequestComments
 */
class EvaluationReviewMetadata extends Shape
{
    /**
     * @param array{
     *     ReviewId?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     ReviewRequestComments: list<EvaluationReviewRequestComment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
