<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroupsForEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupNamePrefix
 */
class ListGroupsForEntityFilters extends Shape
{
    /**
     * @param array{GroupNamePrefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
