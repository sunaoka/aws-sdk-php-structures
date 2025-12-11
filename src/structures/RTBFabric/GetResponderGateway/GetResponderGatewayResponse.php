<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetResponderGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $domainName
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property Shapes\TrustStoreConfiguration|null $trustStoreConfiguration
 * @property Shapes\ManagedEndpointConfiguration|null $managedEndpointConfiguration
 * @property string $gatewayId
 * @property array<string, string>|null $tags
 * @property int|null $activeLinksCount
 * @property int|null $totalLinksCount
 * @property int|null $inboundLinksCount
 */
class GetResponderGatewayResponse extends Response
{
}
