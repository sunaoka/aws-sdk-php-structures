<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReviewId
 * @property \Aws\Api\DateTimeResult|null $RequestedTime
 * @property string|null $RequestedBy
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $CreatedBy
 * @property list<EvaluationReviewRequestComment> $ReviewRequestComments
 */
class EvaluationReviewMetadata extends Shape
{
    /**
     * @param array{
     *     ReviewId?: string|null,
     *     RequestedTime?: \Aws\Api\DateTimeResult|null,
     *     RequestedBy?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     ReviewRequestComments: list<EvaluationReviewRequestComment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
