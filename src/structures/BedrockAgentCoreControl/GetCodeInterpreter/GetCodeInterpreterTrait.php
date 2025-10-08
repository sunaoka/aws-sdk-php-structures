<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCodeInterpreter;

trait GetCodeInterpreterTrait
{
    /**
     * @param GetCodeInterpreterRequest $args
     * @return GetCodeInterpreterResponse
     */
    public function getCodeInterpreter(GetCodeInterpreterRequest $args)
    {
        $result = parent::getCodeInterpreter($args->toArray());
        return new GetCodeInterpreterResponse($result->toArray());
    }
}
