<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $domainId
 * @property list<string>|null $enabledRegions
 * @property string $environmentBlueprintId
 * @property string|null $environmentRolePermissionBoundary
 * @property string|null $manageAccessRoleArn
 * @property list<Shapes\ProvisioningConfiguration>|null $provisioningConfigurations
 * @property string|null $provisioningRoleArn
 * @property array<string, array<string, string>>|null $regionalParameters
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PutEnvironmentBlueprintConfigurationResponse extends Response
{
}
