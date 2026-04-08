<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sourceServerID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property string|null $recoveryInstanceId
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null $lastLaunchResult
 * @property Shapes\DataReplicationInfo|null $dataReplicationInfo
 * @property Shapes\LifeCycle|null $lifeCycle
 * @property Shapes\SourceProperties|null $sourceProperties
 * @property Shapes\StagingArea|null $stagingArea
 * @property Shapes\SourceCloudProperties|null $sourceCloudProperties
 * @property 'FAILOVER'|'FAILBACK'|null $replicationDirection
 * @property string|null $reversedDirectionSourceServerArn
 * @property string|null $sourceNetworkID
 * @property string|null $agentVersion
 */
class DisconnectSourceServerResponse extends Response
{
}
