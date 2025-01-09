<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property Shapes\DeploymentProperties $deploymentProperties
 * @property string $description
 * @property string $domainId
 * @property list<Shapes\ConfigurableEnvironmentAction> $environmentActions
 * @property string $environmentBlueprintId
 * @property string $environmentProfileId
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property Shapes\Deployment $lastDeployment
 * @property string $name
 * @property string $projectId
 * @property string $provider
 * @property list<Shapes\Resource> $provisionedResources
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\CustomParameter> $userParameters
 */
class CreateEnvironmentResponse extends Response
{
}
