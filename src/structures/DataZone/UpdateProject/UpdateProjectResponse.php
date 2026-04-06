<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $domainUnitId
 * @property Shapes\EnvironmentDeploymentDetails|null $environmentDeploymentDetails
 * @property list<Shapes\ProjectDeletionError>|null $failureReasons
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $name
 * @property string|null $projectProfileId
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $projectStatus
 * @property list<Shapes\EnvironmentConfigurationUserParameter>|null $userParameters
 */
class UpdateProjectResponse extends Response
{
}
