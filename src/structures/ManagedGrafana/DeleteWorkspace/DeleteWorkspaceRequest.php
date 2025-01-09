<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DeleteWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 */
class DeleteWorkspaceRequest extends Request
{
    /**
     * @param array{workspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
