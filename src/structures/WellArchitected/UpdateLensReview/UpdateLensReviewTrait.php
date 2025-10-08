<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview;

trait UpdateLensReviewTrait
{
    /**
     * @param UpdateLensReviewRequest $args
     * @return UpdateLensReviewResponse
     */
    public function updateLensReview(UpdateLensReviewRequest $args)
    {
        $result = parent::updateLensReview($args->toArray());
        return new UpdateLensReviewResponse($result->toArray());
    }
}
