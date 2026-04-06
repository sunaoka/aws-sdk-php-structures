<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayId
 * @property string $gatewayName
 * @property GatewayPlatform|null $gatewayPlatform
 * @property string|null $gatewayVersion
 * @property list<GatewayCapabilitySummary>|null $gatewayCapabilitySummaries
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 */
class GatewaySummary extends Shape
{
    /**
     * @param array{
     *     gatewayId: string,
     *     gatewayName: string,
     *     gatewayPlatform?: GatewayPlatform|null,
     *     gatewayVersion?: string|null,
     *     gatewayCapabilitySummaries?: list<GatewayCapabilitySummary>|null,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
