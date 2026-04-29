<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $ruleId
 */
class DeleteGatewayRuleRequest extends Request
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
