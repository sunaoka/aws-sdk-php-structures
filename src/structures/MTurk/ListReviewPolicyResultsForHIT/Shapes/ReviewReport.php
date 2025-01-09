<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReviewResultDetail> $ReviewResults
 * @property list<ReviewActionDetail> $ReviewActions
 */
class ReviewReport extends Shape
{
    /**
     * @param array{
     *     ReviewResults?: list<ReviewResultDetail>,
     *     ReviewActions?: list<ReviewActionDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
