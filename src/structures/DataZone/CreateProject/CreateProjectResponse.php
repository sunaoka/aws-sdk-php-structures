<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property list<Shapes\ProjectDeletionError>|null $failureReasons
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $projectStatus
 */
class CreateProjectResponse extends Response
{
}
