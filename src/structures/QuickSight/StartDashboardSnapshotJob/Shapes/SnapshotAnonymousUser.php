<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SessionTag> $RowLevelPermissionTags
 */
class SnapshotAnonymousUser extends Shape
{
    /**
     * @param array{RowLevelPermissionTags?: list<SessionTag>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
