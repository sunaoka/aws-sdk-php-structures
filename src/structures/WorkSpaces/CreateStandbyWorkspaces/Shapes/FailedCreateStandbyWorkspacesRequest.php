<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StandbyWorkspace|null $StandbyWorkspaceRequest
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedCreateStandbyWorkspacesRequest extends Shape
{
    /**
     * @param array{
     *     StandbyWorkspaceRequest?: StandbyWorkspace|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
