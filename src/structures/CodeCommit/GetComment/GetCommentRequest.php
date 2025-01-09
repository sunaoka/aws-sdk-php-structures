<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $commentId
 */
class GetCommentRequest extends Request
{
    /**
     * @param array{commentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
