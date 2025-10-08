<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutCommentReaction;

trait PutCommentReactionTrait
{
    /**
     * @param PutCommentReactionRequest $args
     * @return void
     */
    public function putCommentReaction(PutCommentReactionRequest $args)
    {
        parent::putCommentReaction($args->toArray());
    }
}
