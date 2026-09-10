<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateResponderGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 * @property 'AVAILABILITY_ZONE_AFFINITY'|'ANY_AVAILABILITY_ZONE'|null $clientRoutingPolicy
 */
class UpdateResponderGatewayResponse extends Response
{
}
