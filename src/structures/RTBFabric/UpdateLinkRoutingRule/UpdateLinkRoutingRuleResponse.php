<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkRoutingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ruleId
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'DELETED'|'FAILED'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updateId
 */
class UpdateLinkRoutingRuleResponse extends Response
{
}
