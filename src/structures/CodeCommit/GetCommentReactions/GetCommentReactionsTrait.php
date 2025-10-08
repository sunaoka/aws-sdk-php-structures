<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions;

trait GetCommentReactionsTrait
{
    /**
     * @param GetCommentReactionsRequest $args
     * @return GetCommentReactionsResponse
     */
    public function getCommentReactions(GetCommentReactionsRequest $args)
    {
        $result = parent::getCommentReactions($args->toArray());
        return new GetCommentReactionsResponse($result->toArray());
    }
}
