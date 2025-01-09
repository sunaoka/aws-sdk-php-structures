<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 * @property string $content
 */
class UpdateCommentRequest extends Request
{
    /**
     * @param array{
     *     commentId: string,
     *     content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
