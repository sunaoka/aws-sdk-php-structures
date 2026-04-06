<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource-type'|'configuration-type'|'owner'|'display-name'|'criticality' $Name
 * @property list<string> $Values
 */
class GroupFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'resource-type'|'configuration-type'|'owner'|'display-name'|'criticality',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
