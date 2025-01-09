<?php

namespace Sunaoka\Aws\Structures\drs\CreateExtendedSourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentVersion
 * @property string $arn
 * @property DataReplicationInfo $dataReplicationInfo
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED' $lastLaunchResult
 * @property LifeCycle $lifeCycle
 * @property string $recoveryInstanceId
 * @property 'FAILOVER'|'FAILBACK' $replicationDirection
 * @property string $reversedDirectionSourceServerArn
 * @property SourceCloudProperties $sourceCloudProperties
 * @property string $sourceNetworkID
 * @property SourceProperties $sourceProperties
 * @property string $sourceServerID
 * @property StagingArea $stagingArea
 * @property array<string, string> $tags
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     agentVersion?: string,
     *     arn?: string,
     *     dataReplicationInfo?: DataReplicationInfo,
     *     lastLaunchResult?: 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED',
     *     lifeCycle?: LifeCycle,
     *     recoveryInstanceId?: string,
     *     replicationDirection?: 'FAILOVER'|'FAILBACK',
     *     reversedDirectionSourceServerArn?: string,
     *     sourceCloudProperties?: SourceCloudProperties,
     *     sourceNetworkID?: string,
     *     sourceProperties?: SourceProperties,
     *     sourceServerID?: string,
     *     stagingArea?: StagingArea,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
