<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails|null $ActiveDirectory
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails|null $MutualAuthentication
 * @property AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails|null $FederatedAuthentication
 */
class AwsEc2ClientVpnEndpointAuthenticationOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     ActiveDirectory?: AwsEc2ClientVpnEndpointAuthenticationOptionsActiveDirectoryDetails|null,
     *     MutualAuthentication?: AwsEc2ClientVpnEndpointAuthenticationOptionsMutualAuthenticationDetails|null,
     *     FederatedAuthentication?: AwsEc2ClientVpnEndpointAuthenticationOptionsFederatedAuthenticationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
