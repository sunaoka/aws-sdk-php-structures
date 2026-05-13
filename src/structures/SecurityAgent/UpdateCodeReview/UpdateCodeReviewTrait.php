<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateCodeReview;

trait UpdateCodeReviewTrait
{
    /**
     * @param UpdateCodeReviewRequest $args
     * @return UpdateCodeReviewResponse
     */
    public function updateCodeReview(UpdateCodeReviewRequest $args)
    {
        $result = parent::updateCodeReview($args->toArray());
        return new UpdateCodeReviewResponse($result->toArray());
    }
}
