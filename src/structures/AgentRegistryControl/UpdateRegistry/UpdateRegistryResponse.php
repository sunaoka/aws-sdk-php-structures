<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string|null $description
 * @property string $registryId
 * @property string $registryArn
 * @property Shapes\DiscoveryConfiguration|null $discoveryConfiguration
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property Shapes\ApprovalConfiguration|null $approvalConfiguration
 * @property 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $statusReason
 * @property Shapes\AutoDetection|null $autoDetection
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateRegistryResponse extends Response
{
}
