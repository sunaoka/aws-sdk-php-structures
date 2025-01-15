<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFile>|null $Files
 */
class SnapshotFileGroup extends Shape
{
    /**
     * @param array{Files?: list<SnapshotFile>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
