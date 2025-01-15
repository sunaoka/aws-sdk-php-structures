<?php

namespace Sunaoka\Aws\Structures\drs\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentVersion
 * @property string|null $arn
 * @property DataReplicationInfo|null $dataReplicationInfo
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null $lastLaunchResult
 * @property LifeCycle|null $lifeCycle
 * @property string|null $recoveryInstanceId
 * @property 'FAILOVER'|'FAILBACK'|null $replicationDirection
 * @property string|null $reversedDirectionSourceServerArn
 * @property SourceCloudProperties|null $sourceCloudProperties
 * @property string|null $sourceNetworkID
 * @property SourceProperties|null $sourceProperties
 * @property string|null $sourceServerID
 * @property StagingArea|null $stagingArea
 * @property array<string, string>|null $tags
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string|null,
     *     arn?: string|null,
     *     dataReplicationInfo?: DataReplicationInfo|null,
     *     lastLaunchResult?: 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null,
     *     lifeCycle?: LifeCycle|null,
     *     recoveryInstanceId?: string|null,
     *     replicationDirection?: 'FAILOVER'|'FAILBACK'|null,
     *     reversedDirectionSourceServerArn?: string|null,
     *     sourceCloudProperties?: SourceCloudProperties|null,
     *     sourceNetworkID?: string|null,
     *     sourceProperties?: SourceProperties|null,
     *     sourceServerID?: string|null,
     *     stagingArea?: StagingArea|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
