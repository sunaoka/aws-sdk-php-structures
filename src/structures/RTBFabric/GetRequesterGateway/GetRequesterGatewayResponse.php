<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetRequesterGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 * @property string $domainName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property string $gatewayId
 * @property array<string, string>|null $tags
 * @property int|null $activeLinksCount
 * @property int|null $totalLinksCount
 */
class GetRequesterGatewayResponse extends Response
{
}
