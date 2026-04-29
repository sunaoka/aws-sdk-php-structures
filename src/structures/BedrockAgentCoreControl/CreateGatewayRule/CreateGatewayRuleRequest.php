<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string|null $clientToken
 * @property int<1, 1000000> $priority
 * @property list<Shapes\Condition>|null $conditions
 * @property list<Shapes\Action> $actions
 * @property string|null $description
 */
class CreateGatewayRuleRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     clientToken?: string|null,
     *     priority: int<1, 1000000>,
     *     conditions?: list<Shapes\Condition>|null,
     *     actions: list<Shapes\Action>,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
