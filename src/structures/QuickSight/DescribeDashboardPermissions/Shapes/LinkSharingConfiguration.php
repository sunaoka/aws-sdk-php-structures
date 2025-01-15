<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcePermission>|null $Permissions
 */
class LinkSharingConfiguration extends Shape
{
    /**
     * @param array{Permissions?: list<ResourcePermission>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
