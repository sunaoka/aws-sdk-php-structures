<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebuildWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class FailedWorkspaceChangeRequest extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string|null,
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
