<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetComment;

trait GetCommentTrait
{
    /**
     * @param GetCommentRequest $args
     * @return GetCommentResponse
     */
    public function getComment(GetCommentRequest $args)
    {
        $result = parent::getComment($args->toArray());
        return new GetCommentResponse($result->toArray());
    }
}
