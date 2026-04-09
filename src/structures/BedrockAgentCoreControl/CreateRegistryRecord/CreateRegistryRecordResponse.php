<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistryRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recordArn
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED' $status
 */
class CreateRegistryRecordResponse extends Response
{
}
