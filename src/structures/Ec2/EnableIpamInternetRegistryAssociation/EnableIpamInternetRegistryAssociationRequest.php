<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableIpamInternetRegistryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string $RpkiVersion
 * @property string $ServiceUri
 * @property string $ChildHandle
 * @property string $ParentHandle
 * @property string $ParentBpkiTa
 * @property string|null $ClientToken
 */
class EnableIpamInternetRegistryAssociationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     RpkiVersion: string,
     *     ServiceUri: string,
     *     ChildHandle: string,
     *     ParentHandle: string,
     *     ParentBpkiTa: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
