<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $gatewayName
 * @property string $gatewayArn
 * @property Shapes\GatewayPlatform|null $gatewayPlatform
 * @property list<Shapes\GatewayCapabilitySummary> $gatewayCapabilitySummaries
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 */
class DescribeGatewayResponse extends Response
{
}
