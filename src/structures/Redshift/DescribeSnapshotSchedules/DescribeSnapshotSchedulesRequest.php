<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeSnapshotSchedules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ScheduleIdentifier
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 * @property string $Marker
 * @property int $MaxRecords
 */
class DescribeSnapshotSchedulesRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     ScheduleIdentifier?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>,
     *     Marker?: string,
     *     MaxRecords?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
