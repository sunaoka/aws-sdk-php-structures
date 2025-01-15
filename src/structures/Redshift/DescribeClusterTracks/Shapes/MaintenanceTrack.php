<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaintenanceTrackName
 * @property string|null $DatabaseVersion
 * @property list<UpdateTarget>|null $UpdateTargets
 */
class MaintenanceTrack extends Shape
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string|null,
     *     DatabaseVersion?: string|null,
     *     UpdateTargets?: list<UpdateTarget>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
