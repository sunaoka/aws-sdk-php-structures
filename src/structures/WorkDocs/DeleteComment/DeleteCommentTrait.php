<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteComment;

trait DeleteCommentTrait
{
    /**
     * @param DeleteCommentRequest $args
     * @return void
     */
    public function deleteComment(DeleteCommentRequest $args)
    {
        parent::deleteComment($args->toArray());
    }
}
