<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string|null $provisioningRoleArn
 * @property string|null $environmentRolePermissionBoundary
 * @property string|null $manageAccessRoleArn
 * @property list<string>|null $enabledRegions
 * @property array<string, array<string, string>>|null $regionalParameters
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<Shapes\ProvisioningConfiguration>|null $provisioningConfigurations
 */
class GetEnvironmentBlueprintConfigurationResponse extends Response
{
}
