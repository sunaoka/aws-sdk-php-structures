<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCaseComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $clientToken
 * @property string $body
 */
class CreateCaseCommentRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     clientToken?: string,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
