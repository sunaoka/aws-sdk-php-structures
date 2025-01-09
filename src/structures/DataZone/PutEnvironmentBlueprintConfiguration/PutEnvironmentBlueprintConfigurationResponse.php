<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $domainId
 * @property list<string> $enabledRegions
 * @property string $environmentBlueprintId
 * @property string $environmentRolePermissionBoundary
 * @property string $manageAccessRoleArn
 * @property list<Shapes\ProvisioningConfiguration> $provisioningConfigurations
 * @property string $provisioningRoleArn
 * @property array<string, array<string, string>> $regionalParameters
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PutEnvironmentBlueprintConfigurationResponse extends Response
{
}
