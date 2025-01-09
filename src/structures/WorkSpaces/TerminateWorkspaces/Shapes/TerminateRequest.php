<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkspaceId
 */
class TerminateRequest extends Shape
{
    /**
     * @param array{WorkspaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
