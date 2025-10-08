<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCodeInterpreter;

trait CreateCodeInterpreterTrait
{
    /**
     * @param CreateCodeInterpreterRequest $args
     * @return CreateCodeInterpreterResponse
     */
    public function createCodeInterpreter(CreateCodeInterpreterRequest $args)
    {
        $result = parent::createCodeInterpreter($args->toArray());
        return new CreateCodeInterpreterResponse($result->toArray());
    }
}
