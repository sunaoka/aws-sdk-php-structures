<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $projectId
 * @property string|null $id
 * @property string $domainId
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $name
 * @property string|null $description
 * @property string|null $environmentProfileId
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $provider
 * @property list<Shapes\ResourceShape>|null $provisionedResources
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 * @property list<Shapes\ConfigurableEnvironmentAction>|null $environmentActions
 * @property list<string>|null $glossaryTerms
 * @property list<Shapes\CustomParameter>|null $userParameters
 * @property Shapes\Deployment|null $lastDeployment
 * @property Shapes\ProvisioningProperties|null $provisioningProperties
 * @property Shapes\DeploymentProperties|null $deploymentProperties
 * @property string|null $environmentBlueprintId
 * @property string|null $environmentConfigurationId
 */
class UpdateEnvironmentResponse extends Response
{
}
