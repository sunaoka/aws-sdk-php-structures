<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NamePrefix
 * @property string|null $PrimaryEmailPrefix
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 */
class ListGroupsFilters extends Shape
{
    /**
     * @param array{
     *     NamePrefix?: string|null,
     *     PrimaryEmailPrefix?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
