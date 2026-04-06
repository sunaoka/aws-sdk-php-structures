<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $applicationID
 * @property string|null $arn
 * @property SourceServerConnectorAction|null $connectorAction
 * @property DataReplicationInfo|null $dataReplicationInfo
 * @property string|null $fqdnForActionFramework
 * @property bool|null $isArchived
 * @property LaunchedInstance|null $launchedInstance
 * @property LifeCycle|null $lifeCycle
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null $replicationType
 * @property SourceProperties|null $sourceProperties
 * @property string|null $sourceServerID
 * @property array<string, string>|null $tags
 * @property string|null $userProvidedID
 * @property string|null $vcenterClientID
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     applicationID?: string|null,
     *     arn?: string|null,
     *     connectorAction?: SourceServerConnectorAction|null,
     *     dataReplicationInfo?: DataReplicationInfo|null,
     *     fqdnForActionFramework?: string|null,
     *     isArchived?: bool|null,
     *     launchedInstance?: LaunchedInstance|null,
     *     lifeCycle?: LifeCycle|null,
     *     replicationType?: 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null,
     *     sourceProperties?: SourceProperties|null,
     *     sourceServerID?: string|null,
     *     tags?: array<string, string>|null,
     *     userProvidedID?: string|null,
     *     vcenterClientID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
