<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceUpdateName
 * @property list<string> $ReplicationGroupIds
 * @property list<string> $CacheClusterIds
 * @property string $Engine
 * @property list<'available'|'cancelled'|'expired'> $ServiceUpdateStatus
 * @property Shapes\TimeRangeFilter $ServiceUpdateTimeRange
 * @property list<'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'> $UpdateActionStatus
 * @property bool $ShowNodeLevelUpdateStatus
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeUpdateActionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string,
     *     ReplicationGroupIds?: list<string>,
     *     CacheClusterIds?: list<string>,
     *     Engine?: string,
     *     ServiceUpdateStatus?: list<'available'|'cancelled'|'expired'>,
     *     ServiceUpdateTimeRange?: Shapes\TimeRangeFilter,
     *     UpdateActionStatus?: list<'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'>,
     *     ShowNodeLevelUpdateStatus?: bool,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
