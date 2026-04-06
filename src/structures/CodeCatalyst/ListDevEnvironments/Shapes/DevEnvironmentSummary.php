<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $spaceName
 * @property string|null $projectName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $creatorId
 * @property 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $status
 * @property string|null $statusReason
 * @property list<DevEnvironmentRepositorySummary> $repositories
 * @property string|null $alias
 * @property list<Ide>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200> $inactivityTimeoutMinutes
 * @property PersistentStorage $persistentStorage
 * @property string|null $vpcConnectionName
 */
class DevEnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     spaceName?: string|null,
     *     projectName?: string|null,
     *     id: string,
     *     lastUpdatedTime: \Aws\Api\DateTimeResult,
     *     creatorId: string,
     *     status: 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED',
     *     statusReason?: string|null,
     *     repositories: list<DevEnvironmentRepositorySummary>,
     *     alias?: string|null,
     *     ides?: list<Ide>|null,
     *     instanceType: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge',
     *     inactivityTimeoutMinutes: int<0, 1200>,
     *     persistentStorage: PersistentStorage,
     *     vpcConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
