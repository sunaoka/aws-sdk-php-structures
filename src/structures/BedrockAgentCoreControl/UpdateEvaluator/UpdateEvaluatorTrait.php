<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator;

trait UpdateEvaluatorTrait
{
    /**
     * @param UpdateEvaluatorRequest $args
     * @return UpdateEvaluatorResponse
     */
    public function updateEvaluator(UpdateEvaluatorRequest $args)
    {
        $result = parent::updateEvaluator($args->toArray());
        return new UpdateEvaluatorResponse($result->toArray());
    }
}
