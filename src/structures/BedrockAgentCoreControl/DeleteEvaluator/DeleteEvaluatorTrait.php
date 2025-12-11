<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteEvaluator;

trait DeleteEvaluatorTrait
{
    /**
     * @param DeleteEvaluatorRequest $args
     * @return DeleteEvaluatorResponse
     */
    public function deleteEvaluator(DeleteEvaluatorRequest $args)
    {
        $result = parent::deleteEvaluator($args->toArray());
        return new DeleteEvaluatorResponse($result->toArray());
    }
}
