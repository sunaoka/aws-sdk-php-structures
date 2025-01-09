<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamePrefix
 * @property string $PrimaryEmailPrefix
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 */
class ListGroupsFilters extends Shape
{
    /**
     * @param array{
     *     NamePrefix?: string,
     *     PrimaryEmailPrefix?: string,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
