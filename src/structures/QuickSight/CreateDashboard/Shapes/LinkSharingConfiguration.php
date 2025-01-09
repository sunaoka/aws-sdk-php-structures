<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcePermission> $Permissions
 */
class LinkSharingConfiguration extends Shape
{
    /**
     * @param array{Permissions?: list<ResourcePermission>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
