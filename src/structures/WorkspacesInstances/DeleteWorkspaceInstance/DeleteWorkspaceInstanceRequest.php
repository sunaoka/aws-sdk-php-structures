<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\DeleteWorkspaceInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceInstanceId
 */
class DeleteWorkspaceInstanceRequest extends Request
{
    /**
     * @param array{WorkspaceInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
