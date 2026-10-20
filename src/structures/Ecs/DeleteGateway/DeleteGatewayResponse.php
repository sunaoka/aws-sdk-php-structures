<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $gatewayArn
 * @property string|null $name
 * @property 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'|null $status
 */
class DeleteGatewayResponse extends Response
{
}
