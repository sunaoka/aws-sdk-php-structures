<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebuildWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RebuildRequest> $RebuildWorkspaceRequests
 */
class RebuildWorkspacesRequest extends Request
{
    /**
     * @param array{RebuildWorkspaceRequests: list<Shapes\RebuildRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
