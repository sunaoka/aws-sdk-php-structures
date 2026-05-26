<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string|null $provisioningRoleArn
 * @property string|null $environmentRolePermissionBoundary
 * @property string|null $manageAccessRoleArn
 * @property list<string>|null $enabledRegions
 * @property array<string, array<string, string>>|null $regionalParameters
 * @property bool|null $allowUserProvidedConfigurations
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property list<ResourceConfiguration>|null $resourceConfigurations
 * @property list<ProvisioningConfiguration>|null $provisioningConfigurations
 */
class EnvironmentBlueprintConfigurationItem extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     environmentBlueprintId: string,
     *     provisioningRoleArn?: string|null,
     *     environmentRolePermissionBoundary?: string|null,
     *     manageAccessRoleArn?: string|null,
     *     enabledRegions?: list<string>|null,
     *     regionalParameters?: array<string, array<string, string>>|null,
     *     allowUserProvidedConfigurations?: bool|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     resourceConfigurations?: list<ResourceConfiguration>|null,
     *     provisioningConfigurations?: list<ProvisioningConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
