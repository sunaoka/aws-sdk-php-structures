<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentReactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 * @property string|null $reactionUserArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class GetCommentReactionsRequest extends Request
{
    /**
     * @param array{
     *     commentId: string,
     *     reactionUserArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
