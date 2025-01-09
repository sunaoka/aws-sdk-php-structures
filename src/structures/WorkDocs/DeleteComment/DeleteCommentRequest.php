<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property string $CommentId
 */
class DeleteCommentRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     CommentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
