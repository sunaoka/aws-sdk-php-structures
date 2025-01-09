<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaintenanceTrackName
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeClusterTracksRequest extends Request
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
