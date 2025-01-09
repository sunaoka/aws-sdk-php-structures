<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamPoolId
 * @property string $Cidr
 * @property Shapes\IpamCidrAuthorizationContext $CidrAuthorizationContext
 * @property int $NetmaskLength
 * @property string $ClientToken
 * @property 'remarks-x509'|'dns-token' $VerificationMethod
 * @property string $IpamExternalResourceVerificationTokenId
 */
class ProvisionIpamPoolCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamPoolId: string,
     *     Cidr?: string,
     *     CidrAuthorizationContext?: Shapes\IpamCidrAuthorizationContext,
     *     NetmaskLength?: int,
     *     ClientToken?: string,
     *     VerificationMethod?: 'remarks-x509'|'dns-token',
     *     IpamExternalResourceVerificationTokenId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
