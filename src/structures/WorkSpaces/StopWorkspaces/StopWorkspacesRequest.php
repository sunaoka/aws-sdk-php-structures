<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StopRequest> $StopWorkspaceRequests
 */
class StopWorkspacesRequest extends Request
{
    /**
     * @param array{StopWorkspaceRequests: list<Shapes\StopRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
