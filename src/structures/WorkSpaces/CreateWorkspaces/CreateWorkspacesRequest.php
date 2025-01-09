<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\WorkspaceRequest> $Workspaces
 */
class CreateWorkspacesRequest extends Request
{
    /**
     * @param array{Workspaces: list<Shapes\WorkspaceRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
