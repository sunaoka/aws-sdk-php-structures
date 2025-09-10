<?php

namespace Sunaoka\Aws\Structures\DataZone\PutEnvironmentBlueprintConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property list<string> $enabledRegions
 * @property string $environmentBlueprintIdentifier
 * @property string|null $environmentRolePermissionBoundary
 * @property array<string, string>|null $globalParameters
 * @property string|null $manageAccessRoleArn
 * @property list<Shapes\ProvisioningConfiguration>|null $provisioningConfigurations
 * @property string|null $provisioningRoleArn
 * @property array<string, array<string, string>>|null $regionalParameters
 */
class PutEnvironmentBlueprintConfigurationRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     enabledRegions: list<string>,
     *     environmentBlueprintIdentifier: string,
     *     environmentRolePermissionBoundary?: string|null,
     *     globalParameters?: array<string, string>|null,
     *     manageAccessRoleArn?: string|null,
     *     provisioningConfigurations?: list<Shapes\ProvisioningConfiguration>|null,
     *     provisioningRoleArn?: string|null,
     *     regionalParameters?: array<string, array<string, string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
