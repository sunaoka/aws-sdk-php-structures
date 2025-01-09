<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandbyWorkspace $StandbyWorkspaceRequest
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class FailedCreateStandbyWorkspacesRequest extends Shape
{
    /**
     * @param array{
     *     StandbyWorkspaceRequest?: StandbyWorkspace,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
