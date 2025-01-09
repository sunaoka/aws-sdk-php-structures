<?php

namespace Sunaoka\Aws\Structures\DataZone\GetProject;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property Shapes\EnvironmentDeploymentDetails $environmentDeploymentDetails
 * @property list<Shapes\ProjectDeletionError> $failureReasons
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property string $projectProfileId
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $projectStatus
 * @property list<Shapes\EnvironmentConfigurationUserParameter> $userParameters
 */
class GetProjectResponse extends Response
{
}
