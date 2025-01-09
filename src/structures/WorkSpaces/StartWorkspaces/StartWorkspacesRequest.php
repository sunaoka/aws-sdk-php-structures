<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StartRequest> $StartWorkspaceRequests
 */
class StartWorkspacesRequest extends Request
{
    /**
     * @param array{StartWorkspaceRequests: list<Shapes\StartRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
