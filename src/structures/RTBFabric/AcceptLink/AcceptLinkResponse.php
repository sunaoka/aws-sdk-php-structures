<?php

namespace Sunaoka\Aws\Structures\RTBFabric\AcceptLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $peerGatewayId
 * @property 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'RESPONSE'|'REQUEST'|null $direction
 * @property list<Shapes\ModuleConfiguration>|null $flowModules
 * @property list<Shapes\ModuleConfiguration>|null $pendingFlowModules
 * @property Shapes\LinkAttributes|null $attributes
 * @property string $linkId
 */
class AcceptLinkResponse extends Response
{
}
