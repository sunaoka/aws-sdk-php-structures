<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaintenanceTrackName
 * @property string $DatabaseVersion
 * @property list<SupportedOperation> $SupportedOperations
 */
class UpdateTarget extends Shape
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string,
     *     DatabaseVersion?: string,
     *     SupportedOperations?: list<SupportedOperation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
