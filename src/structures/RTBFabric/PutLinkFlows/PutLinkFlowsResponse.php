<?php

namespace Sunaoka\Aws\Structures\RTBFabric\PutLinkFlows;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property string $updateId
 */
class PutLinkFlowsResponse extends Response
{
}
