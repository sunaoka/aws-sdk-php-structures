<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\DeploymentProperties $deploymentProperties
 * @property string $description
 * @property list<string> $glossaryTerms
 * @property string $id
 * @property string $name
 * @property string $provider
 * @property Shapes\ProvisioningProperties $provisioningProperties
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<Shapes\CustomParameter> $userParameters
 */
class GetEnvironmentBlueprintResponse extends Response
{
}
