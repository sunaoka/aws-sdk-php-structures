<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RoutingRuleAction>|null $Actions
 * @property list<Shapes\RoutingRuleCondition>|null $Conditions
 * @property int<1, 1000000>|null $Priority
 * @property string|null $RoutingRuleArn
 * @property string|null $RoutingRuleId
 */
class PutRoutingRuleResponse extends Response
{
}
