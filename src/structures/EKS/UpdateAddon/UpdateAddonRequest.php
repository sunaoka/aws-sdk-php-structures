<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 * @property string $addonVersion
 * @property string $serviceAccountRoleArn
 * @property 'OVERWRITE'|'NONE'|'PRESERVE' $resolveConflicts
 * @property string $clientRequestToken
 * @property string $configurationValues
 * @property list<Shapes\AddonPodIdentityAssociations> $podIdentityAssociations
 */
class UpdateAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string,
     *     addonVersion?: string,
     *     serviceAccountRoleArn?: string,
     *     resolveConflicts?: 'OVERWRITE'|'NONE'|'PRESERVE',
     *     clientRequestToken?: string,
     *     configurationValues?: string,
     *     podIdentityAssociations?: list<Shapes\AddonPodIdentityAssociations>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
