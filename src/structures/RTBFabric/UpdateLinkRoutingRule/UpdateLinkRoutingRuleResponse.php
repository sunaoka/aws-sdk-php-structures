<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkRoutingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ruleId
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateLinkRoutingRuleResponse extends Response
{
}
