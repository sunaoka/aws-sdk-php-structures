<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebootWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 */
class RebootRequest extends Shape
{
    /**
     * @param array{WorkspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
