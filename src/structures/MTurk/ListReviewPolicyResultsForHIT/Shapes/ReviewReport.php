<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReviewResultDetail>|null $ReviewResults
 * @property list<ReviewActionDetail>|null $ReviewActions
 */
class ReviewReport extends Shape
{
    /**
     * @param array{
     *     ReviewResults?: list<ReviewResultDetail>|null,
     *     ReviewActions?: list<ReviewActionDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
