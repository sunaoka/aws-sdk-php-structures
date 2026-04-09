<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property string $name
 * @property string|null $description
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS' $descriptorType
 * @property Shapes\Descriptors $descriptors
 * @property string|null $recordVersion
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $statusReason
 * @property 'URL'|null $synchronizationType
 * @property Shapes\SynchronizationConfiguration|null $synchronizationConfiguration
 */
class UpdateRegistryRecordResponse extends Response
{
}
