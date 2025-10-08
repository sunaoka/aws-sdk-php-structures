<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateLensReview;

trait UpdateReviewTemplateLensReviewTrait
{
    /**
     * @param UpdateReviewTemplateLensReviewRequest $args
     * @return UpdateReviewTemplateLensReviewResponse
     */
    public function updateReviewTemplateLensReview(UpdateReviewTemplateLensReviewRequest $args)
    {
        $result = parent::updateReviewTemplateLensReview($args->toArray());
        return new UpdateReviewTemplateLensReviewResponse($result->toArray());
    }
}
