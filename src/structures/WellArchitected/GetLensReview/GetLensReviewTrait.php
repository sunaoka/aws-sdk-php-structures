<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview;

trait GetLensReviewTrait
{
    /**
     * @param GetLensReviewRequest $args
     * @return GetLensReviewResponse
     */
    public function getLensReview(GetLensReviewRequest $args)
    {
        $result = parent::getLensReview($args->toArray());
        return new GetLensReviewResponse($result->toArray());
    }
}
