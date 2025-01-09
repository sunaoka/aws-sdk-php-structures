<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceIdentifier $Identifier
 * @property ResourceStatus $Status
 */
class ListGroupResourcesItem extends Shape
{
    /**
     * @param array{
     *     Identifier?: ResourceIdentifier,
     *     Status?: ResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
