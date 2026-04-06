<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupName
 * @property string|null $GroupArn
 */
class GroupIdentifier extends Shape
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     GroupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
