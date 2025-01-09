<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotAnonymousUser> $AnonymousUsers
 */
class SnapshotUserConfiguration extends Shape
{
    /**
     * @param array{AnonymousUsers?: list<SnapshotAnonymousUser>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
