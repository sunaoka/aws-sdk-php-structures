<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestExecution;

trait StartTestExecutionTrait
{
    /**
     * @param StartTestExecutionRequest $args
     * @return StartTestExecutionResponse
     */
    public function startTestExecution(StartTestExecutionRequest $args)
    {
        $result = parent::startTestExecution($args->toArray());
        return new StartTestExecutionResponse($result->toArray());
    }
}
