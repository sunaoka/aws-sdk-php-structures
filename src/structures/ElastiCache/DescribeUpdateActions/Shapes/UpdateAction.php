<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $CacheClusterId
 * @property string $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult $ServiceUpdateReleaseDate
 * @property 'critical'|'important'|'medium'|'low' $ServiceUpdateSeverity
 * @property 'available'|'cancelled'|'expired' $ServiceUpdateStatus
 * @property \Aws\Api\DateTimeResult $ServiceUpdateRecommendedApplyByDate
 * @property 'security-update' $ServiceUpdateType
 * @property \Aws\Api\DateTimeResult $UpdateActionAvailableDate
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable' $UpdateActionStatus
 * @property string $NodesUpdated
 * @property \Aws\Api\DateTimeResult $UpdateActionStatusModifiedDate
 * @property 'yes'|'no'|'n/a' $SlaMet
 * @property list<NodeGroupUpdateStatus> $NodeGroupUpdateStatus
 * @property list<CacheNodeUpdateStatus> $CacheNodeUpdateStatus
 * @property string $EstimatedUpdateTime
 * @property string $Engine
 */
class UpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     CacheClusterId?: string,
     *     ServiceUpdateName?: string,
     *     ServiceUpdateReleaseDate?: \Aws\Api\DateTimeResult,
     *     ServiceUpdateSeverity?: 'critical'|'important'|'medium'|'low',
     *     ServiceUpdateStatus?: 'available'|'cancelled'|'expired',
     *     ServiceUpdateRecommendedApplyByDate?: \Aws\Api\DateTimeResult,
     *     ServiceUpdateType?: 'security-update',
     *     UpdateActionAvailableDate?: \Aws\Api\DateTimeResult,
     *     UpdateActionStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable',
     *     NodesUpdated?: string,
     *     UpdateActionStatusModifiedDate?: \Aws\Api\DateTimeResult,
     *     SlaMet?: 'yes'|'no'|'n/a',
     *     NodeGroupUpdateStatus?: list<NodeGroupUpdateStatus>,
     *     CacheNodeUpdateStatus?: list<CacheNodeUpdateStatus>,
     *     EstimatedUpdateTime?: string,
     *     Engine?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
