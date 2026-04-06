<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 * @property string|null $addonVersion
 * @property string|null $serviceAccountRoleArn
 * @property 'OVERWRITE'|'NONE'|'PRESERVE'|null $resolveConflicts
 * @property string|null $clientRequestToken
 * @property string|null $configurationValues
 */
class UpdateAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string,
     *     addonVersion?: string|null,
     *     serviceAccountRoleArn?: string|null,
     *     resolveConflicts?: 'OVERWRITE'|'NONE'|'PRESERVE'|null,
     *     clientRequestToken?: string|null,
     *     configurationValues?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
