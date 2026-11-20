<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecordStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateRegistryRecordStatusResponse extends Response
{
}
