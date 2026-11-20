<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLinkRoutingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property string $ruleId
 * @property int<1, 1000> $priority
 * @property Shapes\RuleCondition $conditions
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'DELETED'|'FAILED'|'CREATE_FAILED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property array<string, string>|null $tags
 * @property list<Shapes\ErrorDetail>|null $errorDetails
 */
class GetLinkRoutingRuleResponse extends Response
{
}
