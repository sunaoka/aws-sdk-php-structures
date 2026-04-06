<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyNextScenario;

trait GetAutomatedReasoningPolicyNextScenarioTrait
{
    /**
     * @param GetAutomatedReasoningPolicyNextScenarioRequest $args
     * @return GetAutomatedReasoningPolicyNextScenarioResponse
     */
    public function getAutomatedReasoningPolicyNextScenario(GetAutomatedReasoningPolicyNextScenarioRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicyNextScenario($args->toArray());
        return new GetAutomatedReasoningPolicyNextScenarioResponse($result->toArray());
    }
}
