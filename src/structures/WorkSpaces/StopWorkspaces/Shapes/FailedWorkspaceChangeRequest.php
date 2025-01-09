<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class FailedWorkspaceChangeRequest extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string,
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
