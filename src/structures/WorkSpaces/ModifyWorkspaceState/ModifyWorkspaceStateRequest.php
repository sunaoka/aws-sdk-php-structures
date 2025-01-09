<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyWorkspaceState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkspaceId
 * @property 'AVAILABLE'|'ADMIN_MAINTENANCE' $WorkspaceState
 */
class ModifyWorkspaceStateRequest extends Request
{
    /**
     * @param array{
     *     WorkspaceId: string,
     *     WorkspaceState: 'AVAILABLE'|'ADMIN_MAINTENANCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
