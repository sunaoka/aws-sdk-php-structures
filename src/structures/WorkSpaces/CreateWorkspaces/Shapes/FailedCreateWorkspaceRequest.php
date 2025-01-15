<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceRequest|null $WorkspaceRequest
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedCreateWorkspaceRequest extends Shape
{
    /**
     * @param array{
     *     WorkspaceRequest?: WorkspaceRequest|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
