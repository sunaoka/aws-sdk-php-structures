<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForComparedCommit;

trait PostCommentForComparedCommitTrait
{
    /**
     * @param PostCommentForComparedCommitRequest $args
     * @return PostCommentForComparedCommitResponse
     */
    public function postCommentForComparedCommit(PostCommentForComparedCommitRequest $args)
    {
        $result = parent::postCommentForComparedCommit($args->toArray());
        return new PostCommentForComparedCommitResponse($result->toArray());
    }
}
