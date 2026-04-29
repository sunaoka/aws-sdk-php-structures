<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $ruleId
 */
class GetGatewayRuleRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     ruleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
