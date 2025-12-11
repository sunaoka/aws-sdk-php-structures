<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetEvaluator;

trait GetEvaluatorTrait
{
    /**
     * @param GetEvaluatorRequest $args
     * @return GetEvaluatorResponse
     */
    public function getEvaluator(GetEvaluatorRequest $args)
    {
        $result = parent::getEvaluator($args->toArray());
        return new GetEvaluatorResponse($result->toArray());
    }
}
