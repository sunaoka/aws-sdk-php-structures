<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyEngines;

trait ListPolicyEnginesTrait
{
    /**
     * @param ListPolicyEnginesRequest $args
     * @return ListPolicyEnginesResponse
     */
    public function listPolicyEngines(ListPolicyEnginesRequest $args)
    {
        $result = parent::listPolicyEngines($args->toArray());
        return new ListPolicyEnginesResponse($result->toArray());
    }
}
