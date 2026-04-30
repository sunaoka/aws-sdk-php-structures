<?php

namespace Sunaoka\Aws\Structures\DataZone\StartNotebookRun;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $domainId
 * @property string $owningProjectId
 * @property string $notebookId
 * @property string|null $scheduleId
 * @property 'QUEUED'|'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED' $status
 * @property list<Shapes\CellInformation>|null $cellOrder
 * @property array<string, string>|null $metadata
 * @property array<string, string>|null $parameters
 * @property Shapes\ComputeConfig|null $computeConfiguration
 * @property Shapes\NetworkConfig|null $networkConfiguration
 * @property Shapes\TimeoutConfig|null $timeoutConfiguration
 * @property Shapes\EnvironmentConfig|null $environmentConfiguration
 * @property Shapes\StorageConfig|null $storageConfiguration
 * @property Shapes\TriggerSource|null $triggerSource
 * @property Shapes\NotebookRunError|null $error
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 */
class StartNotebookRunResponse extends Response
{
}
