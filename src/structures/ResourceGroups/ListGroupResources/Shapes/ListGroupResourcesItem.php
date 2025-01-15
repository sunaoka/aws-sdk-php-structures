<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceIdentifier|null $Identifier
 * @property ResourceStatus|null $Status
 */
class ListGroupResourcesItem extends Shape
{
    /**
     * @param array{
     *     Identifier?: ResourceIdentifier|null,
     *     Status?: ResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
