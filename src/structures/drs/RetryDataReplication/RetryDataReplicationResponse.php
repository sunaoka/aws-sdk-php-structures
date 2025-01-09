<?php

namespace Sunaoka\Aws\Structures\drs\RetryDataReplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentVersion
 * @property string $arn
 * @property Shapes\DataReplicationInfo $dataReplicationInfo
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED' $lastLaunchResult
 * @property Shapes\LifeCycle $lifeCycle
 * @property string $recoveryInstanceId
 * @property 'FAILOVER'|'FAILBACK' $replicationDirection
 * @property string $reversedDirectionSourceServerArn
 * @property Shapes\SourceCloudProperties $sourceCloudProperties
 * @property string $sourceNetworkID
 * @property Shapes\SourceProperties $sourceProperties
 * @property string $sourceServerID
 * @property Shapes\StagingArea $stagingArea
 * @property array<string, string> $tags
 */
class RetryDataReplicationResponse extends Response
{
}
