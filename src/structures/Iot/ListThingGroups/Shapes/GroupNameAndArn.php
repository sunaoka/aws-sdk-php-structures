<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupName
 * @property string $groupArn
 */
class GroupNameAndArn extends Shape
{
    /**
     * @param array{
     *     groupName?: string,
     *     groupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
