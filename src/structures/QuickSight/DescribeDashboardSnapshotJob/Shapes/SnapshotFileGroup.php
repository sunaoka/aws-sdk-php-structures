<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFile> $Files
 */
class SnapshotFileGroup extends Shape
{
    /**
     * @param array{Files?: list<SnapshotFile>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
