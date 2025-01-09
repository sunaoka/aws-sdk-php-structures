<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentBlueprintConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $domainId
 * @property list<string> $enabledRegions
 * @property string $environmentBlueprintId
 * @property string $environmentRolePermissionBoundary
 * @property string $manageAccessRoleArn
 * @property list<ProvisioningConfiguration> $provisioningConfigurations
 * @property string $provisioningRoleArn
 * @property array<string, array<string, string>> $regionalParameters
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class EnvironmentBlueprintConfigurationItem extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     domainId: string,
     *     enabledRegions?: list<string>,
     *     environmentBlueprintId: string,
     *     environmentRolePermissionBoundary?: string,
     *     manageAccessRoleArn?: string,
     *     provisioningConfigurations?: list<ProvisioningConfiguration>,
     *     provisioningRoleArn?: string,
     *     regionalParameters?: array<string, array<string, string>>,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
