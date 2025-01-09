<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails $ActiveDirectory
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails $MutualAuthentication
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails $FederatedAuthentication
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     ActiveDirectory?: AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails,
     *     MutualAuthentication?: AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails,
     *     FederatedAuthentication?: AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
