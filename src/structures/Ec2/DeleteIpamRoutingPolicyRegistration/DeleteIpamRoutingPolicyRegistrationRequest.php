<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamRoutingPolicyRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string $Cidr
 * @property bool|null $Force
 * @property string|null $ClientToken
 */
class DeleteIpamRoutingPolicyRegistrationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     Cidr: string,
     *     Force?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
