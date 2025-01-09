<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 */
class StartRequest extends Shape
{
    /**
     * @param array{WorkspaceId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
