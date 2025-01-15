<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $agentVersion
 * @property string|null $arn
 * @property Shapes\DataReplicationInfo|null $dataReplicationInfo
 * @property 'NOT_STARTED'|'PENDING'|'SUCCEEDED'|'FAILED'|null $lastLaunchResult
 * @property Shapes\LifeCycle|null $lifeCycle
 * @property string|null $recoveryInstanceId
 * @property 'FAILOVER'|'FAILBACK'|null $replicationDirection
 * @property string|null $reversedDirectionSourceServerArn
 * @property Shapes\SourceCloudProperties|null $sourceCloudProperties
 * @property string|null $sourceNetworkID
 * @property Shapes\SourceProperties|null $sourceProperties
 * @property string|null $sourceServerID
 * @property Shapes\StagingArea|null $stagingArea
 * @property array<string, string>|null $tags
 */
class DisconnectSourceServerResponse extends Response
{
}
