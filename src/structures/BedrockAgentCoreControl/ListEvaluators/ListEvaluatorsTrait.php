<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListEvaluators;

trait ListEvaluatorsTrait
{
    /**
     * @param ListEvaluatorsRequest $args
     * @return ListEvaluatorsResponse
     */
    public function listEvaluators(ListEvaluatorsRequest $args)
    {
        $result = parent::listEvaluators($args->toArray());
        return new ListEvaluatorsResponse($result->toArray());
    }
}
