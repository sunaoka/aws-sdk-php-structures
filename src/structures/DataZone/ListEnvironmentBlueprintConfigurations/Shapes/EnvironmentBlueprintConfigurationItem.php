<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $domainId
 * @property list<string>|null $enabledRegions
 * @property string $environmentBlueprintId
 * @property string|null $environmentRolePermissionBoundary
 * @property string|null $manageAccessRoleArn
 * @property list<ProvisioningConfiguration>|null $provisioningConfigurations
 * @property string|null $provisioningRoleArn
 * @property array<string, array<string, string>>|null $regionalParameters
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnvironmentBlueprintConfigurationItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     domainId: string,
     *     enabledRegions?: list<string>|null,
     *     environmentBlueprintId: string,
     *     environmentRolePermissionBoundary?: string|null,
     *     manageAccessRoleArn?: string|null,
     *     provisioningConfigurations?: list<ProvisioningConfiguration>|null,
     *     provisioningRoleArn?: string|null,
     *     regionalParameters?: array<string, array<string, string>>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
