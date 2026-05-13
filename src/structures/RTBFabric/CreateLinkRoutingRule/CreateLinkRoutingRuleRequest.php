<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateLinkRoutingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $gatewayId
 * @property string $linkId
 * @property int<1, 1000> $priority
 * @property Shapes\RuleCondition $conditions
 * @property array<string, string>|null $tags
 */
class CreateLinkRoutingRuleRequest extends Request
{
    /**
     * @param array{
     *     clientToken: string,
     *     gatewayId: string,
     *     linkId: string,
     *     priority: int<1, 1000>,
     *     conditions: Shapes\RuleCondition,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
