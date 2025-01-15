<?php

namespace Sunaoka\Aws\Structures\mgn\StartReplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationID
 * @property string|null $arn
 * @property Shapes\SourceServerConnectorAction|null $connectorAction
 * @property Shapes\DataReplicationInfo|null $dataReplicationInfo
 * @property string|null $fqdnForActionFramework
 * @property bool|null $isArchived
 * @property Shapes\LaunchedInstance|null $launchedInstance
 * @property Shapes\LifeCycle|null $lifeCycle
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null $replicationType
 * @property Shapes\SourceProperties|null $sourceProperties
 * @property string|null $sourceServerID
 * @property array<string, string>|null $tags
 * @property string|null $userProvidedID
 * @property string|null $vcenterClientID
 */
class StartReplicationResponse extends Response
{
}
