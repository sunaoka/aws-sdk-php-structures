<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamRoutingPolicyRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamInternetRegistryAssociationId
 * @property string $Cidr
 * @property list<string> $Asns
 * @property bool|null $PermitMoreSpecificAnnouncements
 * @property int<0, 48>|null $MaxLength
 * @property string|null $Description
 * @property bool|null $Force
 * @property string|null $ClientToken
 */
class ModifyIpamRoutingPolicyRegistrationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamInternetRegistryAssociationId: string,
     *     Cidr: string,
     *     Asns: list<string>,
     *     PermitMoreSpecificAnnouncements?: bool|null,
     *     MaxLength?: int<0, 48>|null,
     *     Description?: string|null,
     *     Force?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
