<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCaseComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $commentId
 * @property string $body
 */
class UpdateCaseCommentRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     commentId: string,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
