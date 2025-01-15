<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $Description
 * @property string|null $ClientCidrBlock
 * @property list<string>|null $DnsServer
 * @property bool|null $SplitTunnel
 * @property string|null $TransportProtocol
 * @property int|null $VpnPort
 * @property string|null $ServerCertificateArn
 * @property list<AwsEc2ClientVpnEndpointAuthenticationOptionsDetails>|null $AuthenticationOptions
 * @property AwsEc2ClientVpnEndpointConnectionLogOptionsDetails|null $ConnectionLogOptions
 * @property list<string>|null $SecurityGroupIdSet
 * @property string|null $VpcId
 * @property string|null $SelfServicePortalUrl
 * @property AwsEc2ClientVpnEndpointClientConnectOptionsDetails|null $ClientConnectOptions
 * @property int|null $SessionTimeoutHours
 * @property AwsEc2ClientVpnEndpointClientLoginBannerOptionsDetails|null $ClientLoginBannerOptions
 */
class AwsEc2ClientVpnEndpointDetails extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string|null,
     *     Description?: string|null,
     *     ClientCidrBlock?: string|null,
     *     DnsServer?: list<string>|null,
     *     SplitTunnel?: bool|null,
     *     TransportProtocol?: string|null,
     *     VpnPort?: int|null,
     *     ServerCertificateArn?: string|null,
     *     AuthenticationOptions?: list<AwsEc2ClientVpnEndpointAuthenticationOptionsDetails>|null,
     *     ConnectionLogOptions?: AwsEc2ClientVpnEndpointConnectionLogOptionsDetails|null,
     *     SecurityGroupIdSet?: list<string>|null,
     *     VpcId?: string|null,
     *     SelfServicePortalUrl?: string|null,
     *     ClientConnectOptions?: AwsEc2ClientVpnEndpointClientConnectOptionsDetails|null,
     *     SessionTimeoutHours?: int|null,
     *     ClientLoginBannerOptions?: AwsEc2ClientVpnEndpointClientLoginBannerOptionsDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
