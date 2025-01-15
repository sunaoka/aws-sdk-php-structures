<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionId
 * @property string|null $SubjectId
 * @property string|null $SubjectType
 * @property string|null $QuestionId
 * @property string|null $Key
 * @property string|null $Value
 */
class ReviewResultDetail extends Shape
{
    /**
     * @param array{
     *     ActionId?: string|null,
     *     SubjectId?: string|null,
     *     SubjectType?: string|null,
     *     QuestionId?: string|null,
     *     Key?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
