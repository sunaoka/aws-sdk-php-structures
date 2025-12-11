<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateRequesterGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $domainName
 * @property 'PENDING_CREATION'|'ACTIVE'|'PENDING_DELETION'|'DELETED'|'ERROR'|'PENDING_UPDATE'|'ISOLATED'|'PENDING_ISOLATION'|'PENDING_RESTORATION' $status
 */
class CreateRequesterGatewayResponse extends Response
{
}
