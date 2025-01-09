<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionId
 * @property string $SubjectId
 * @property string $SubjectType
 * @property string $QuestionId
 * @property string $Key
 * @property string $Value
 */
class ReviewResultDetail extends Shape
{
    /**
     * @param array{
     *     ActionId?: string,
     *     SubjectId?: string,
     *     SubjectType?: string,
     *     QuestionId?: string,
     *     Key?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
