<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotFileGroup> $FileGroups
 * @property SnapshotDestinationConfiguration $DestinationConfiguration
 * @property Parameters $Parameters
 */
class SnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     FileGroups: list<SnapshotFileGroup>,
     *     DestinationConfiguration?: SnapshotDestinationConfiguration,
     *     Parameters?: Parameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
