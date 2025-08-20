<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 * @property string|null $addonVersion
 * @property string|null $serviceAccountRoleArn
 * @property 'OVERWRITE'|'NONE'|'PRESERVE'|null $resolveConflicts
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 * @property string|null $configurationValues
 * @property list<Shapes\AddonPodIdentityAssociations>|null $podIdentityAssociations
 * @property Shapes\AddonNamespaceConfigRequest|null $namespaceConfig
 */
class CreateAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string,
     *     addonVersion?: string|null,
     *     serviceAccountRoleArn?: string|null,
     *     resolveConflicts?: 'OVERWRITE'|'NONE'|'PRESERVE'|null,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null,
     *     configurationValues?: string|null,
     *     podIdentityAssociations?: list<Shapes\AddonPodIdentityAssociations>|null,
     *     namespaceConfig?: Shapes\AddonNamespaceConfigRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
