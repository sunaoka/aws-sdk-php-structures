<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaintenanceTrackName
 * @property string $DatabaseVersion
 * @property list<UpdateTarget> $UpdateTargets
 */
class MaintenanceTrack extends Shape
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string,
     *     DatabaseVersion?: string,
     *     UpdateTargets?: list<UpdateTarget>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
