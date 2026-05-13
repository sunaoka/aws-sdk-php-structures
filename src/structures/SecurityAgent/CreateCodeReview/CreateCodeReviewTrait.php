<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateCodeReview;

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
