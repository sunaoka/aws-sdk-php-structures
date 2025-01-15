<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFileGroup> $FileGroups
 * @property SnapshotDestinationConfiguration|null $DestinationConfiguration
 * @property Parameters|null $Parameters
 */
class SnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     FileGroups: list<SnapshotFileGroup>,
     *     DestinationConfiguration?: SnapshotDestinationConfiguration|null,
     *     Parameters?: Parameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
