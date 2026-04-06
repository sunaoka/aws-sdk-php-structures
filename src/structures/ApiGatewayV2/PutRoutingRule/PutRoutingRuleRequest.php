<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\PutRoutingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\RoutingRuleAction> $Actions
 * @property list<Shapes\RoutingRuleCondition> $Conditions
 * @property string $DomainName
 * @property string|null $DomainNameId
 * @property int<1, 1000000> $Priority
 * @property string $RoutingRuleId
 */
class PutRoutingRuleRequest extends Request
{
    /**
     * @param array{
     *     Actions: list<Shapes\RoutingRuleAction>,
     *     Conditions: list<Shapes\RoutingRuleCondition>,
     *     DomainName: string,
     *     DomainNameId?: string|null,
     *     Priority: int<1, 1000000>,
     *     RoutingRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
