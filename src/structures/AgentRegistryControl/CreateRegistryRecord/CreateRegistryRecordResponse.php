<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistryRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recordArn
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH' $status
 * @property Shapes\AuthorizationData|null $authorizationData
 */
class CreateRegistryRecordResponse extends Response
{
}
