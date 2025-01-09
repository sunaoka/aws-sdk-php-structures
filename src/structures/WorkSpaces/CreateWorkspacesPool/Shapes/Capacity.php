<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DesiredUserSessions
 */
class Capacity extends Shape
{
    /**
     * @param array{DesiredUserSessions: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
