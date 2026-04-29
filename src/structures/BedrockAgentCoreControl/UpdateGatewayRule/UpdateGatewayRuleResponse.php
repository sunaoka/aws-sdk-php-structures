<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ruleId
 * @property string $gatewayArn
 * @property int<1, 1000000> $priority
 * @property list<Shapes\Condition>|null $conditions
 * @property list<Shapes\Action> $actions
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $status
 * @property Shapes\SystemManagedBlock|null $system
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class UpdateGatewayRuleResponse extends Response
{
}
