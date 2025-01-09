<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource-type' $Name
 * @property list<string> $Values
 */
class ResourceFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'resource-type',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
