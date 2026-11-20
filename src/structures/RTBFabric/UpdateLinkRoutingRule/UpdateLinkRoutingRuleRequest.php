<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateLinkRoutingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property string $ruleId
 * @property int<1, 1000> $priority
 * @property Shapes\RuleCondition $conditions
 * @property string|null $clientToken
 */
class UpdateLinkRoutingRuleRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     ruleId: string,
     *     priority: int<1, 1000>,
     *     conditions: Shapes\RuleCondition,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
