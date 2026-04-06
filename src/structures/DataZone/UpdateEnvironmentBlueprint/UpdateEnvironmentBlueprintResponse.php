<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property string $provider
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property Shapes\DeploymentProperties|null $deploymentProperties
 * @property list<Shapes\CustomParameter>|null $userParameters
 * @property list<string>|null $glossaryTerms
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UpdateEnvironmentBlueprintResponse extends Response
{
}
