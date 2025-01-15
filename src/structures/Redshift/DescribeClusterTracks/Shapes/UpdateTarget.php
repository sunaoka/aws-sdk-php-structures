<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaintenanceTrackName
 * @property string|null $DatabaseVersion
 * @property list<SupportedOperation>|null $SupportedOperations
 */
class UpdateTarget extends Shape
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string|null,
     *     DatabaseVersion?: string|null,
     *     SupportedOperations?: list<SupportedOperation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
