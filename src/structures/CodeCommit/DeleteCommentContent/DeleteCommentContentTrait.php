<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteCommentContent;

trait DeleteCommentContentTrait
{
    /**
     * @param DeleteCommentContentRequest $args
     * @return DeleteCommentContentResponse
     */
    public function deleteCommentContent(DeleteCommentContentRequest $args)
    {
        $result = parent::deleteCommentContent($args->toArray());
        return new DeleteCommentContentResponse($result->toArray());
    }
}
