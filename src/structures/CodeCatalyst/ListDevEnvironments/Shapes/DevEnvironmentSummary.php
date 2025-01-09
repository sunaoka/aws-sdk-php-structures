<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $creatorId
 * @property 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $status
 * @property string $statusReason
 * @property list<DevEnvironmentRepositorySummary> $repositories
 * @property string $alias
 * @property list<Ide> $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200> $inactivityTimeoutMinutes
 * @property PersistentStorage $persistentStorage
 * @property string $vpcConnectionName
 */
class DevEnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     spaceName?: string,
     *     projectName?: string,
     *     id: string,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     creatorId: string,
     *     status: 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED',
     *     statusReason?: string,
     *     repositories: list<DevEnvironmentRepositorySummary>,
     *     alias?: string,
     *     ides?: list<Ide>,
     *     instanceType: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge',
     *     inactivityTimeoutMinutes: int<0, 1200>,
     *     persistentStorage: PersistentStorage,
     *     vpcConnectionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
