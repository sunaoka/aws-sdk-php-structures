<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeIssue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $issueId
 */
class GetCodeIssueRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     issueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
