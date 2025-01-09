<?php

namespace Sunaoka\Aws\Structures\QuickSight\StartDashboardSnapshotJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SnapshotS3DestinationConfiguration> $S3Destinations
 */
class SnapshotDestinationConfiguration extends Shape
{
    /**
     * @param array{S3Destinations?: list<SnapshotS3DestinationConfiguration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
