<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateScript;

trait CreateScriptTrait
{
    /**
     * @param CreateScriptRequest $args
     * @return CreateScriptResponse
     */
    public function createScript(CreateScriptRequest $args)
    {
        $result = parent::createScript($args->toArray());
        return new CreateScriptResponse($result->toArray());
    }
}
