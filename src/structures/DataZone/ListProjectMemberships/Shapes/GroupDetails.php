<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupId
 */
class GroupDetails extends Shape
{
    /**
     * @param array{groupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
