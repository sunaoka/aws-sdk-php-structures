<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

trait ListReviewPolicyResultsForHITTrait
{
    /**
     * @param ListReviewPolicyResultsForHITRequest $args
     * @return ListReviewPolicyResultsForHITResponse
     */
    public function listReviewPolicyResultsForHIT(ListReviewPolicyResultsForHITRequest $args)
    {
        $result = parent::listReviewPolicyResultsForHIT($args->toArray());
        return new ListReviewPolicyResultsForHITResponse($result->toArray());
    }
}
