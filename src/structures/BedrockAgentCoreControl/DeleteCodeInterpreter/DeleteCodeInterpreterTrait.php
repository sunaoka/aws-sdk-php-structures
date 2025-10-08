<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteCodeInterpreter;

trait DeleteCodeInterpreterTrait
{
    /**
     * @param DeleteCodeInterpreterRequest $args
     * @return DeleteCodeInterpreterResponse
     */
    public function deleteCodeInterpreter(DeleteCodeInterpreterRequest $args)
    {
        $result = parent::deleteCodeInterpreter($args->toArray());
        return new DeleteCodeInterpreterResponse($result->toArray());
    }
}
