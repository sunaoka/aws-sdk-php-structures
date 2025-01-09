<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientVpnEndpointId
 * @property string $Description
 * @property string $ClientCidrBlock
 * @property list<string> $DnsServer
 * @property bool $SplitTunnel
 * @property string $TransportProtocol
 * @property int $VpnPort
 * @property string $ServerCertificateArn
 * @property list<AwsEc2ClientVpnEndpointAuthenticationOptionsDetails> $AuthenticationOptions
 * @property AwsEc2ClientVpnEndpointConnectionLogOptionsDetails $ConnectionLogOptions
 * @property list<string> $SecurityGroupIdSet
 * @property string $VpcId
 * @property string $SelfServicePortalUrl
 * @property AwsEc2ClientVpnEndpointClientConnectOptionsDetails $ClientConnectOptions
 * @property int $SessionTimeoutHours
 * @property AwsEc2ClientVpnEndpointClientLoginBannerOptionsDetails $ClientLoginBannerOptions
 */
class AwsEc2ClientVpnEndpointDetails extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string,
     *     Description?: string,
     *     ClientCidrBlock?: string,
     *     DnsServer?: list<string>,
     *     SplitTunnel?: bool,
     *     TransportProtocol?: string,
     *     VpnPort?: int,
     *     ServerCertificateArn?: string,
     *     AuthenticationOptions?: list<AwsEc2ClientVpnEndpointAuthenticationOptionsDetails>,
     *     ConnectionLogOptions?: AwsEc2ClientVpnEndpointConnectionLogOptionsDetails,
     *     SecurityGroupIdSet?: list<string>,
     *     VpcId?: string,
     *     SelfServicePortalUrl?: string,
     *     ClientConnectOptions?: AwsEc2ClientVpnEndpointClientConnectOptionsDetails,
     *     SessionTimeoutHours?: int,
     *     ClientLoginBannerOptions?: AwsEc2ClientVpnEndpointClientLoginBannerOptionsDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
