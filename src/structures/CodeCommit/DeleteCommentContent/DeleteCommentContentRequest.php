<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteCommentContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 */
class DeleteCommentContentRequest extends Request
{
    /**
     * @param array{commentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
