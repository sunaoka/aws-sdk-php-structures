<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property Shapes\DeploymentProperties|null $deploymentProperties
 * @property string|null $description
 * @property string $domainId
 * @property list<Shapes\ConfigurableEnvironmentAction>|null $environmentActions
 * @property string|null $environmentBlueprintId
 * @property string|null $environmentConfigurationId
 * @property string|null $environmentProfileId
 * @property list<string>|null $glossaryTerms
 * @property string|null $id
 * @property Shapes\Deployment|null $lastDeployment
 * @property string $name
 * @property string $projectId
 * @property string $provider
 * @property list<Shapes\Resource>|null $provisionedResources
 * @property Shapes\ProvisioningProperties|null $provisioningProperties
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class CreateEnvironmentResponse extends Response
{
}
