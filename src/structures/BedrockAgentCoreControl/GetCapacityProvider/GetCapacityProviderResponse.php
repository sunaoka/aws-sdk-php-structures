<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capacityProviderId
 * @property string $capacityProviderArn
 * @property string $name
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $description
 * @property 'VALIDATION_ERROR'|'QUOTA_EXCEEDED'|'THROTTLED'|'INTERNAL_SERVER_EXCEPTION'|null $statusCode
 * @property string|null $statusReason
 * @property Shapes\PermissionsConfiguration $permissionsConfiguration
 * @property Shapes\ComputeConfiguration $computeConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class GetCapacityProviderResponse extends Response
{
}
