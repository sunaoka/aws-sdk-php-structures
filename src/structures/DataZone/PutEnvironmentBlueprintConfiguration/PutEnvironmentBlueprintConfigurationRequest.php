<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $environmentBlueprintIdentifier
 * @property string|null $provisioningRoleArn
 * @property string|null $manageAccessRoleArn
 * @property string|null $environmentRolePermissionBoundary
 * @property list<string> $enabledRegions
 * @property array<string, array<string, string>>|null $regionalParameters
 * @property array<string, string>|null $globalParameters
 * @property list<Shapes\ProvisioningConfiguration>|null $provisioningConfigurations
 */
class PutEnvironmentBlueprintConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     environmentBlueprintIdentifier: string,
     *     provisioningRoleArn?: string|null,
     *     manageAccessRoleArn?: string|null,
     *     environmentRolePermissionBoundary?: string|null,
     *     enabledRegions: list<string>,
     *     regionalParameters?: array<string, array<string, string>>|null,
     *     globalParameters?: array<string, string>|null,
     *     provisioningConfigurations?: list<Shapes\ProvisioningConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
