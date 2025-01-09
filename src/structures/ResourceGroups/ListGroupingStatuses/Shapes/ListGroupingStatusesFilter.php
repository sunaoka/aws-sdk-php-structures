<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\ListGroupingStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'status'|'resource-arn' $Name
 * @property list<string> $Values
 */
class ListGroupingStatusesFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'status'|'resource-arn',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
