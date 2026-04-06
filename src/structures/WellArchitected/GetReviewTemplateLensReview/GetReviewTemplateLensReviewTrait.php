<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateLensReview;

trait GetReviewTemplateLensReviewTrait
{
    /**
     * @param GetReviewTemplateLensReviewRequest $args
     * @return GetReviewTemplateLensReviewResponse
     */
    public function getReviewTemplateLensReview(GetReviewTemplateLensReviewRequest $args)
    {
        $result = parent::getReviewTemplateLensReview($args->toArray());
        return new GetReviewTemplateLensReviewResponse($result->toArray());
    }
}
