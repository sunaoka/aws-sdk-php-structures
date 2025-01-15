<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterTracks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaintenanceTrackName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeClusterTracksRequest extends Request
{
    /**
     * @param array{
     *     MaintenanceTrackName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
