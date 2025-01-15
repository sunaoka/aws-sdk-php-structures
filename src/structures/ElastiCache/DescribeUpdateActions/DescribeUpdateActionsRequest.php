<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServiceUpdateName
 * @property list<string>|null $ReplicationGroupIds
 * @property list<string>|null $CacheClusterIds
 * @property string|null $Engine
 * @property list<'available'|'cancelled'|'expired'>|null $ServiceUpdateStatus
 * @property Shapes\TimeRangeFilter|null $ServiceUpdateTimeRange
 * @property list<'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'>|null $UpdateActionStatus
 * @property bool|null $ShowNodeLevelUpdateStatus
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeUpdateActionsRequest extends Request
{
    /**
     * @param array{
     *     ServiceUpdateName?: string|null,
     *     ReplicationGroupIds?: list<string>|null,
     *     CacheClusterIds?: list<string>|null,
     *     Engine?: string|null,
     *     ServiceUpdateStatus?: list<'available'|'cancelled'|'expired'>|null,
     *     ServiceUpdateTimeRange?: Shapes\TimeRangeFilter|null,
     *     UpdateActionStatus?: list<'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'>|null,
     *     ShowNodeLevelUpdateStatus?: bool|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
