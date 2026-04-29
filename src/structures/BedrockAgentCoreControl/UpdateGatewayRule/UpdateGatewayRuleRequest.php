<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $ruleId
 * @property int<1, 1000000>|null $priority
 * @property list<Shapes\Condition>|null $conditions
 * @property list<Shapes\Action>|null $actions
 * @property string|null $description
 */
class UpdateGatewayRuleRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     ruleId: string,
     *     priority?: int<1, 1000000>|null,
     *     conditions?: list<Shapes\Condition>|null,
     *     actions?: list<Shapes\Action>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
