<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetOutboundExternalLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION' $status
 * @property string $publicEndpoint
 * @property list<Shapes\ModuleConfiguration>|null $flowModules
 * @property list<Shapes\ModuleConfiguration>|null $pendingFlowModules
 * @property Shapes\LinkAttributes|null $attributes
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $tags
 * @property Shapes\LinkLogSettings|null $logSettings
 * @property 'DEFAULT'|'PUBLIC_INGRESS'|'PUBLIC_EGRESS'|'EXTERNAL_INBOUND'|null $connectivityType
 */
class GetOutboundExternalLinkResponse extends Response
{
}
