<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RestoreWorkspace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 */
class RestoreWorkspaceRequest extends Request
{
    /**
     * @param array{WorkspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
