<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateNotebook;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property string $domainId
 * @property list<Shapes\CellInformation> $cellOrder
 * @property 'ACTIVE'|'ARCHIVED'|'SYNC_IN_PROGRESS'|'SYNC_FAILED' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string|null $lockedBy
 * @property \Aws\Api\DateTimeResult|null $lockedAt
 * @property \Aws\Api\DateTimeResult|null $lockExpiresAt
 * @property string|null $computeId
 * @property array<string, string>|null $metadata
 * @property array<string, string>|null $parameters
 * @property Shapes\EnvironmentConfig|null $environmentConfiguration
 * @property Shapes\NotebookError|null $error
 * @property Shapes\GitMetadata|null $gitMetadata
 */
class CreateNotebookResponse extends Response
{
}
