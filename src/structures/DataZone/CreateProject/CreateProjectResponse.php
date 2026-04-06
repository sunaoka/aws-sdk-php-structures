<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'MOVING'|null $projectStatus
 * @property list<Shapes\ProjectDeletionError>|null $failureReasons
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property list<Shapes\ResourceTag>|null $resourceTags
 * @property list<string>|null $glossaryTerms
 * @property string|null $domainUnitId
 * @property string|null $projectProfileId
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 * @property Shapes\EnvironmentDeploymentDetails|null $environmentDeploymentDetails
 */
class CreateProjectResponse extends Response
{
}
