<?php

namespace Sunaoka\Aws\Structures\mgn\ChangeServerLifeCycleState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $sourceServerID
 * @property string|null $arn
 * @property bool|null $isArchived
 * @property array<string, string>|null $tags
 * @property Shapes\LaunchedInstance|null $launchedInstance
 * @property Shapes\DataReplicationInfo|null $dataReplicationInfo
 * @property Shapes\LifeCycle|null $lifeCycle
 * @property Shapes\SourceProperties|null $sourceProperties
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null $replicationType
 * @property string|null $vcenterClientID
 * @property string|null $applicationID
 * @property string|null $userProvidedID
 * @property string|null $fqdnForActionFramework
 * @property Shapes\SourceServerConnectorAction|null $connectorAction
 */
class ChangeServerLifeCycleStateResponse extends Response
{
}
