<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED' $status
 * @property list<string>|null $statusReasons
 */
class DeleteGatewayResponse extends Response
{
}
