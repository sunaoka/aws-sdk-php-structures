<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateResponderGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 * @property Shapes\ListenerConfig|null $listenerConfig
 * @property string|null $externalInboundEndpoint
 */
class CreateResponderGatewayResponse extends Response
{
}
