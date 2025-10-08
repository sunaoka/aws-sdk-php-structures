<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyComment;

trait UpdateTrafficPolicyCommentTrait
{
    /**
     * @param UpdateTrafficPolicyCommentRequest $args
     * @return UpdateTrafficPolicyCommentResponse
     */
    public function updateTrafficPolicyComment(UpdateTrafficPolicyCommentRequest $args)
    {
        $result = parent::updateTrafficPolicyComment($args->toArray());
        return new UpdateTrafficPolicyCommentResponse($result->toArray());
    }
}
