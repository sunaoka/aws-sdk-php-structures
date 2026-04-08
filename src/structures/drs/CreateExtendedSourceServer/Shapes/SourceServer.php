<?php

namespace Sunaoka\Aws\Structures\drs\CreateExtendedSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property string|null $recoveryInstanceId
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null $lastLaunchResult
 * @property DataReplicationInfo|null $dataReplicationInfo
 * @property LifeCycle|null $lifeCycle
 * @property SourceProperties|null $sourceProperties
 * @property StagingArea|null $stagingArea
 * @property SourceCloudProperties|null $sourceCloudProperties
 * @property 'FAILOVER'|'FAILBACK'|null $replicationDirection
 * @property string|null $reversedDirectionSourceServerArn
 * @property string|null $sourceNetworkID
 * @property string|null $agentVersion
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     arn?: string|null,
     *     tags?: array<string, string>|null,
     *     recoveryInstanceId?: string|null,
     *     lastLaunchResult?: 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null,
     *     dataReplicationInfo?: DataReplicationInfo|null,
     *     lifeCycle?: LifeCycle|null,
     *     sourceProperties?: SourceProperties|null,
     *     stagingArea?: StagingArea|null,
     *     sourceCloudProperties?: SourceCloudProperties|null,
     *     replicationDirection?: 'FAILOVER'|'FAILBACK'|null,
     *     reversedDirectionSourceServerArn?: string|null,
     *     sourceNetworkID?: string|null,
     *     agentVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
