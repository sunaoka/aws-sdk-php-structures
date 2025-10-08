<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\DeploymentProperties|null $deploymentProperties
 * @property string|null $description
 * @property list<string>|null $glossaryTerms
 * @property string $id
 * @property string $name
 * @property string $provider
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<Shapes\CustomParameter>|null $userParameters
 */
class UpdateEnvironmentBlueprintResponse extends Response
{
}
