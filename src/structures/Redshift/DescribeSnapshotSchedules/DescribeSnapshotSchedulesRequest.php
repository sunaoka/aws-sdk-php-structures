<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $ScheduleIdentifier
 * @property list<string>|null $TagKeys
 * @property list<string>|null $TagValues
 * @property string|null $Marker
 * @property int|null $MaxRecords
 */
class DescribeSnapshotSchedulesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     ScheduleIdentifier?: string|null,
     *     TagKeys?: list<string>|null,
     *     TagValues?: list<string>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
