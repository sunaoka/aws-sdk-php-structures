<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeSourceServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationID
 * @property string $arn
 * @property SourceServerConnectorAction $connectorAction
 * @property DataReplicationInfo $dataReplicationInfo
 * @property string $fqdnForActionFramework
 * @property bool $isArchived
 * @property LaunchedInstance $launchedInstance
 * @property LifeCycle $lifeCycle
 * @property 'AGENT_BASED'|'SNAPSHOT_SHIPPING' $replicationType
 * @property SourceProperties $sourceProperties
 * @property string $sourceServerID
 * @property array<string, string> $tags
 * @property string $userProvidedID
 * @property string $vcenterClientID
 */
class SourceServer extends Shape
{
    /**
     * @param array{
     *     applicationID?: string,
     *     arn?: string,
     *     connectorAction?: SourceServerConnectorAction,
     *     dataReplicationInfo?: DataReplicationInfo,
     *     fqdnForActionFramework?: string,
     *     isArchived?: bool,
     *     launchedInstance?: LaunchedInstance,
     *     lifeCycle?: LifeCycle,
     *     replicationType?: 'AGENT_BASED'|'SNAPSHOT_SHIPPING',
     *     sourceProperties?: SourceProperties,
     *     sourceServerID?: string,
     *     tags?: array<string, string>,
     *     userProvidedID?: string,
     *     vcenterClientID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
