<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\SubmitRegistryRecordForApproval;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryArn
 * @property string $recordArn
 * @property string $recordId
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SubmitRegistryRecordForApprovalResponse extends Response
{
}
