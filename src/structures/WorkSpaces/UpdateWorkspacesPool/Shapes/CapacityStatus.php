<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailableUserSessions
 * @property int $DesiredUserSessions
 * @property int $ActualUserSessions
 * @property int $ActiveUserSessions
 */
class CapacityStatus extends Shape
{
    /**
     * @param array{
     *     AvailableUserSessions: int,
     *     DesiredUserSessions: int,
     *     ActualUserSessions: int,
     *     ActiveUserSessions: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
