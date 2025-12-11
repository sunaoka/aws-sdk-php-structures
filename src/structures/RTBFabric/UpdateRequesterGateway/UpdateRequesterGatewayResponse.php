<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateRequesterGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 */
class UpdateRequesterGatewayResponse extends Response
{
}
