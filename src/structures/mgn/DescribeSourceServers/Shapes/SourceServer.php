<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sourceServerID
 * @property string|null $arn
 * @property bool|null $isArchived
 * @property array<string, string>|null $tags
 * @property LaunchedInstance|null $launchedInstance
 * @property DataReplicationInfo|null $dataReplicationInfo
 * @property LifeCycle|null $lifeCycle
 * @property SourceProperties|null $sourceProperties
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null $replicationType
 * @property string|null $vcenterClientID
 * @property string|null $applicationID
 * @property string|null $userProvidedID
 * @property string|null $fqdnForActionFramework
 * @property SourceServerConnectorAction|null $connectorAction
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     sourceServerID?: string|null,
     *     arn?: string|null,
     *     isArchived?: bool|null,
     *     tags?: array<string, string>|null,
     *     launchedInstance?: LaunchedInstance|null,
     *     dataReplicationInfo?: DataReplicationInfo|null,
     *     lifeCycle?: LifeCycle|null,
     *     sourceProperties?: SourceProperties|null,
     *     replicationType?: 'AGENT_BASED'|'SNAPSHOT_SHIPPING'|null,
     *     vcenterClientID?: string|null,
     *     applicationID?: string|null,
     *     userProvidedID?: string|null,
     *     fqdnForActionFramework?: string|null,
     *     connectorAction?: SourceServerConnectorAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
