<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\Evaluate;

trait EvaluateTrait
{
    /**
     * @param EvaluateRequest $args
     * @return EvaluateResponse
     */
    public function evaluate(EvaluateRequest $args)
    {
        $result = parent::evaluate($args->toArray());
        return new EvaluateResponse($result->toArray());
    }
}
