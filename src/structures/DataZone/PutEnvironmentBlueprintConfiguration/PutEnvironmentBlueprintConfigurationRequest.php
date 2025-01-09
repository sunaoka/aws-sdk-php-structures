<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property list<string> $enabledRegions
 * @property string $environmentBlueprintIdentifier
 * @property string $environmentRolePermissionBoundary
 * @property string $manageAccessRoleArn
 * @property list<Shapes\ProvisioningConfiguration> $provisioningConfigurations
 * @property string $provisioningRoleArn
 * @property array<string, array<string, string>> $regionalParameters
 */
class PutEnvironmentBlueprintConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     enabledRegions: list<string>,
     *     environmentBlueprintIdentifier: string,
     *     environmentRolePermissionBoundary?: string,
     *     manageAccessRoleArn?: string,
     *     provisioningConfigurations?: list<Shapes\ProvisioningConfiguration>,
     *     provisioningRoleArn?: string,
     *     regionalParameters?: array<string, array<string, string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
