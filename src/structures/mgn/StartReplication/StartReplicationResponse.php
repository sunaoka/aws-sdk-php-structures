<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationID
 * @property string $arn
 * @property Shapes\SourceServerConnectorAction $connectorAction
 * @property Shapes\DataReplicationInfo $dataReplicationInfo
 * @property string $fqdnForActionFramework
 * @property bool $isArchived
 * @property Shapes\LaunchedInstance $launchedInstance
 * @property Shapes\LifeCycle $lifeCycle
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING' $replicationType
 * @property Shapes\SourceProperties $sourceProperties
 * @property string $sourceServerID
 * @property array<string, string> $tags
 * @property string $userProvidedID
 * @property string $vcenterClientID
 */
class StartReplicationResponse extends Response
{
}
