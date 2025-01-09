<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupsForEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $GroupName
 */
class GroupIdentifier extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     GroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
