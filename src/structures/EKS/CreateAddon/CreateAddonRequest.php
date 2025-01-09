<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 * @property string $addonVersion
 * @property string $serviceAccountRoleArn
 * @property 'OVERWRITE'|'NONE'|'PRESERVE' $resolveConflicts
 * @property string $clientRequestToken
 * @property array<string, string> $tags
 * @property string $configurationValues
 * @property list<Shapes\AddonPodIdentityAssociations> $podIdentityAssociations
 */
class CreateAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string,
     *     addonVersion?: string,
     *     serviceAccountRoleArn?: string,
     *     resolveConflicts?: 'OVERWRITE'|'NONE'|'PRESERVE',
     *     clientRequestToken?: string,
     *     tags?: array<string, string>,
     *     configurationValues?: string,
     *     podIdentityAssociations?: list<Shapes\AddonPodIdentityAssociations>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
