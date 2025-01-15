<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $groupName
 * @property string|null $groupArn
 */
class GroupNameAndArn extends Shape
{
    /**
     * @param array{
     *     groupName?: string|null,
     *     groupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
