<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 */
class StartRequest extends Shape
{
    /**
     * @param array{WorkspaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
