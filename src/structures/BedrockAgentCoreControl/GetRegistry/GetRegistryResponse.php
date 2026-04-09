<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property string $registryId
 * @property string $registryArn
 * @property 'CUSTOM_JWT'|'AWS_IAM'|null $authorizerType
 * @property Shapes\AuthorizerConfiguration|null $authorizerConfiguration
 * @property Shapes\ApprovalConfiguration|null $approvalConfiguration
 * @property 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetRegistryResponse extends Response
{
}
