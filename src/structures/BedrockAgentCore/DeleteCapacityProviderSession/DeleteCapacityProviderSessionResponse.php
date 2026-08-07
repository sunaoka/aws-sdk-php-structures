<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteCapacityProviderSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capacityProviderArn
 * @property string $sessionId
 * @property 'Provisioning'|'Deprovisioning'|'Active'|'Deleting'|'Deleted'|'Stopped' $status
 */
class DeleteCapacityProviderSessionResponse extends Response
{
}
