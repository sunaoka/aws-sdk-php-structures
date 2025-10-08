<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneComment;

trait UpdateHostedZoneCommentTrait
{
    /**
     * @param UpdateHostedZoneCommentRequest $args
     * @return UpdateHostedZoneCommentResponse
     */
    public function updateHostedZoneComment(UpdateHostedZoneCommentRequest $args)
    {
        $result = parent::updateHostedZoneComment($args->toArray());
        return new UpdateHostedZoneCommentResponse($result->toArray());
    }
}
