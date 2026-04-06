<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter;

trait InvokeCodeInterpreterTrait
{
    /**
     * @param InvokeCodeInterpreterRequest $args
     * @return InvokeCodeInterpreterResponse
     */
    public function invokeCodeInterpreter(InvokeCodeInterpreterRequest $args)
    {
        $result = parent::invokeCodeInterpreter($args->toArray());
        return new InvokeCodeInterpreterResponse($result->toArray());
    }
}
