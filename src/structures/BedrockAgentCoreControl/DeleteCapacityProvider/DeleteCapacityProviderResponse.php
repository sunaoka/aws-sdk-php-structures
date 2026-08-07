<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteCapacityProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capacityProviderId
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 */
class DeleteCapacityProviderResponse extends Response
{
}
