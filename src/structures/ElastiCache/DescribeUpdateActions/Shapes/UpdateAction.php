<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $CacheClusterId
 * @property string|null $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult|null $ServiceUpdateReleaseDate
 * @property 'critical'|'important'|'medium'|'low'|null $ServiceUpdateSeverity
 * @property 'available'|'cancelled'|'expired'|null $ServiceUpdateStatus
 * @property \Aws\Api\DateTimeResult|null $ServiceUpdateRecommendedApplyByDate
 * @property 'security-update'|null $ServiceUpdateType
 * @property \Aws\Api\DateTimeResult|null $UpdateActionAvailableDate
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'|null $UpdateActionStatus
 * @property string|null $NodesUpdated
 * @property \Aws\Api\DateTimeResult|null $UpdateActionStatusModifiedDate
 * @property 'yes'|'no'|'n/a'|null $SlaMet
 * @property list<NodeGroupUpdateStatus>|null $NodeGroupUpdateStatus
 * @property list<CacheNodeUpdateStatus>|null $CacheNodeUpdateStatus
 * @property string|null $EstimatedUpdateTime
 * @property string|null $Engine
 */
class UpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     CacheClusterId?: string|null,
     *     ServiceUpdateName?: string|null,
     *     ServiceUpdateReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceUpdateSeverity?: 'critical'|'important'|'medium'|'low'|null,
     *     ServiceUpdateStatus?: 'available'|'cancelled'|'expired'|null,
     *     ServiceUpdateRecommendedApplyByDate?: \Aws\Api\DateTimeResult|null,
     *     ServiceUpdateType?: 'security-update'|null,
     *     UpdateActionAvailableDate?: \Aws\Api\DateTimeResult|null,
     *     UpdateActionStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'|null,
     *     NodesUpdated?: string|null,
     *     UpdateActionStatusModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     SlaMet?: 'yes'|'no'|'n/a'|null,
     *     NodeGroupUpdateStatus?: list<NodeGroupUpdateStatus>|null,
     *     CacheNodeUpdateStatus?: list<CacheNodeUpdateStatus>|null,
     *     EstimatedUpdateTime?: string|null,
     *     Engine?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
