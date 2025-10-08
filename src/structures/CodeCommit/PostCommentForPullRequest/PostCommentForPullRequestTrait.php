<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentForPullRequest;

trait PostCommentForPullRequestTrait
{
    /**
     * @param PostCommentForPullRequestRequest $args
     * @return PostCommentForPullRequestResponse
     */
    public function postCommentForPullRequest(PostCommentForPullRequestRequest $args)
    {
        $result = parent::postCommentForPullRequest($args->toArray());
        return new PostCommentForPullRequestResponse($result->toArray());
    }
}
