<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceRequest $WorkspaceRequest
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class FailedCreateWorkspaceRequest extends Shape
{
    /**
     * @param array{
     *     WorkspaceRequest?: WorkspaceRequest,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
