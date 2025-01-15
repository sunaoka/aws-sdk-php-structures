<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 */
class StopRequest extends Shape
{
    /**
     * @param array{WorkspaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
