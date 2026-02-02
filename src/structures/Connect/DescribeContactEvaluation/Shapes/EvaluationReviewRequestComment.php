<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $CreatedBy
 */
class EvaluationReviewRequestComment extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
