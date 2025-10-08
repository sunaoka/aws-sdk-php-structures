<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\CreateCodeReview;

trait CreateCodeReviewTrait
{
    /**
     * @param CreateCodeReviewRequest $args
     * @return CreateCodeReviewResponse
     */
    public function createCodeReview(CreateCodeReviewRequest $args)
    {
        $result = parent::createCodeReview($args->toArray());
        return new CreateCodeReviewResponse($result->toArray());
    }
}
