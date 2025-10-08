<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentReply;

trait PostCommentReplyTrait
{
    /**
     * @param PostCommentReplyRequest $args
     * @return PostCommentReplyResponse
     */
    public function postCommentReply(PostCommentReplyRequest $args)
    {
        $result = parent::postCommentReply($args->toArray());
        return new PostCommentReplyResponse($result->toArray());
    }
}
