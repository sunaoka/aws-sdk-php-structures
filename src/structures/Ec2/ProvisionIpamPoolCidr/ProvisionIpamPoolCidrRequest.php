<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamPoolId
 * @property string|null $Cidr
 * @property Shapes\IpamCidrAuthorizationContext|null $CidrAuthorizationContext
 * @property int|null $NetmaskLength
 * @property string|null $ClientToken
 * @property 'remarks-x509'|'dns-token'|null $VerificationMethod
 * @property string|null $IpamExternalResourceVerificationTokenId
 */
class ProvisionIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamPoolId: string,
     *     Cidr?: string|null,
     *     CidrAuthorizationContext?: Shapes\IpamCidrAuthorizationContext|null,
     *     NetmaskLength?: int|null,
     *     ClientToken?: string|null,
     *     VerificationMethod?: 'remarks-x509'|'dns-token'|null,
     *     IpamExternalResourceVerificationTokenId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
