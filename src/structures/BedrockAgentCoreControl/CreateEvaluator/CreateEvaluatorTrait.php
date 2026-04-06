<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator;

trait CreateEvaluatorTrait
{
    /**
     * @param CreateEvaluatorRequest $args
     * @return CreateEvaluatorResponse
     */
    public function createEvaluator(CreateEvaluatorRequest $args)
    {
        $result = parent::createEvaluator($args->toArray());
        return new CreateEvaluatorResponse($result->toArray());
    }
}
