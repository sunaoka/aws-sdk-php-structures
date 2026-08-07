<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capacityProviderId
 * @property string $capacityProviderArn
 * @property string $name
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class UpdateCapacityProviderResponse extends Response
{
}
