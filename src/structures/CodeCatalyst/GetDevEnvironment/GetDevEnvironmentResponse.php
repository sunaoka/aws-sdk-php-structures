<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\GetDevEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $creatorId
 * @property 'PENDING'|'RUNNING'|'STARTING'|'STOPPING'|'STOPPED'|'FAILED'|'DELETING'|'DELETED' $status
 * @property string $statusReason
 * @property list<Shapes\DevEnvironmentRepositorySummary> $repositories
 * @property string $alias
 * @property list<Shapes\Ide> $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int $inactivityTimeoutMinutes
 * @property Shapes\PersistentStorage $persistentStorage
 * @property string $vpcConnectionName
 */
class GetDevEnvironmentResponse extends Response
{
}
