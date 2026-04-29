<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayRule;

trait DeleteGatewayRuleTrait
{
    /**
     * @param DeleteGatewayRuleRequest $args
     * @return DeleteGatewayRuleResponse
     */
    public function deleteGatewayRule(DeleteGatewayRuleRequest $args)
    {
        $result = parent::deleteGatewayRule($args->toArray());
        return new DeleteGatewayRuleResponse($result->toArray());
    }
}
