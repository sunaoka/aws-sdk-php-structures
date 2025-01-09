<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutCommentReaction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 * @property string $reactionValue
 */
class PutCommentReactionRequest extends Request
{
    /**
     * @param array{
     *     commentId: string,
     *     reactionValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
