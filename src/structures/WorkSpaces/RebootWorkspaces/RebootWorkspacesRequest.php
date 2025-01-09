<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebootWorkspaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RebootRequest> $RebootWorkspaceRequests
 */
class RebootWorkspacesRequest extends Request
{
    /**
     * @param array{RebootWorkspaceRequests: list<Shapes\RebootRequest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
