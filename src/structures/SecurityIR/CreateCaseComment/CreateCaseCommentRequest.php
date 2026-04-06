<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCaseComment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string|null $clientToken
 * @property string $body
 */
class CreateCaseCommentRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     clientToken?: string|null,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
