<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 * @property string $reactionUserArn
 * @property string $nextToken
 * @property int $maxResults
 */
class GetCommentReactionsRequest extends Request
{
    /**
     * @param array{
     *     commentId: string,
     *     reactionUserArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
