<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\GetWorkspaceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 */
class GetWorkspaceInstanceRequest extends Request
{
    /**
     * @param array{WorkspaceInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
