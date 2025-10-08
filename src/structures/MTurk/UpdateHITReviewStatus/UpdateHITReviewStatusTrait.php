<?php

namespace Sunaoka\Aws\Structures\MTurk\UpdateHITReviewStatus;

trait UpdateHITReviewStatusTrait
{
    /**
     * @param UpdateHITReviewStatusRequest $args
     * @return UpdateHITReviewStatusResponse
     */
    public function updateHITReviewStatus(UpdateHITReviewStatusRequest $args)
    {
        $result = parent::updateHITReviewStatus($args->toArray());
        return new UpdateHITReviewStatusResponse($result->toArray());
    }
}
