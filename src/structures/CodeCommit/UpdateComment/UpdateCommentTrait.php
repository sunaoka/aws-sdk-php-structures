<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateComment;

trait UpdateCommentTrait
{
    /**
     * @param UpdateCommentRequest $args
     * @return UpdateCommentResponse
     */
    public function updateComment(UpdateCommentRequest $args)
    {
        $result = parent::updateComment($args->toArray());
        return new UpdateCommentResponse($result->toArray());
    }
}
