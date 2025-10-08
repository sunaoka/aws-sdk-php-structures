<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateComment;

trait CreateCommentTrait
{
    /**
     * @param CreateCommentRequest $args
     * @return CreateCommentResponse
     */
    public function createComment(CreateCommentRequest $args)
    {
        $result = parent::createComment($args->toArray());
        return new CreateCommentResponse($result->toArray());
    }
}
