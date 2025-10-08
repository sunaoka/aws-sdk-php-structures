<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayTarget;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayArn
 * @property string $targetId
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED' $status
 * @property list<string>|null $statusReasons
 */
class DeleteGatewayTargetResponse extends Response
{
}
