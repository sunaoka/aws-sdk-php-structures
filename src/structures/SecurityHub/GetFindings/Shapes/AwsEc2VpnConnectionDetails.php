<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpnConnectionId
 * @property string|null $State
 * @property string|null $CustomerGatewayId
 * @property string|null $CustomerGatewayConfiguration
 * @property string|null $Type
 * @property string|null $VpnGatewayId
 * @property string|null $Category
 * @property list<AwsEc2VpnConnectionVgwTelemetryDetails>|null $VgwTelemetry
 * @property AwsEc2VpnConnectionOptionsDetails|null $Options
 * @property list<AwsEc2VpnConnectionRoutesDetails>|null $Routes
 * @property string|null $TransitGatewayId
 */
class AwsEc2VpnConnectionDetails extends Shape
{
    /**
     * @param array{
     *     VpnConnectionId?: string|null,
     *     State?: string|null,
     *     CustomerGatewayId?: string|null,
     *     CustomerGatewayConfiguration?: string|null,
     *     Type?: string|null,
     *     VpnGatewayId?: string|null,
     *     Category?: string|null,
     *     VgwTelemetry?: list<AwsEc2VpnConnectionVgwTelemetryDetails>|null,
     *     Options?: AwsEc2VpnConnectionOptionsDetails|null,
     *     Routes?: list<AwsEc2VpnConnectionRoutesDetails>|null,
     *     TransitGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
