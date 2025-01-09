<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TerminateRequest> $TerminateWorkspaceRequests
 */
class TerminateWorkspacesRequest extends Request
{
    /**
     * @param array{TerminateWorkspaceRequests: list<Shapes\TerminateRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
