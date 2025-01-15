<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PostCommentReply;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inReplyTo
 * @property string|null $clientRequestToken
 * @property string $content
 */
class PostCommentReplyRequest extends Request
{
    /**
     * @param array{
     *     inReplyTo: string,
     *     clientRequestToken?: string|null,
     *     content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
