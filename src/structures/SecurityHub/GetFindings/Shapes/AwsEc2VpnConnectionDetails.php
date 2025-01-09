<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpnConnectionId
 * @property string $State
 * @property string $CustomerGatewayId
 * @property string $CustomerGatewayConfiguration
 * @property string $Type
 * @property string $VpnGatewayId
 * @property string $Category
 * @property list<AwsEc2VpnConnectionVgwTelemetryDetails> $VgwTelemetry
 * @property AwsEc2VpnConnectionOptionsDetails $Options
 * @property list<AwsEc2VpnConnectionRoutesDetails> $Routes
 * @property string $TransitGatewayId
 */
class AwsEc2VpnConnectionDetails extends Shape
{
    /**
     * @param array{
     *     VpnConnectionId?: string,
     *     State?: string,
     *     CustomerGatewayId?: string,
     *     CustomerGatewayConfiguration?: string,
     *     Type?: string,
     *     VpnGatewayId?: string,
     *     Category?: string,
     *     VgwTelemetry?: list<AwsEc2VpnConnectionVgwTelemetryDetails>,
     *     Options?: AwsEc2VpnConnectionOptionsDetails,
     *     Routes?: list<AwsEc2VpnConnectionRoutesDetails>,
     *     TransitGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
