<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotAnonymousUser>|null $AnonymousUsers
 */
class SnapshotUserConfiguration extends Shape
{
    /**
     * @param array{AnonymousUsers?: list<SnapshotAnonymousUser>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
