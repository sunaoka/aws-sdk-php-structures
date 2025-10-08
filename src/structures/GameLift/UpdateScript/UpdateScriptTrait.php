<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateScript;

trait UpdateScriptTrait
{
    /**
     * @param UpdateScriptRequest $args
     * @return UpdateScriptResponse
     */
    public function updateScript(UpdateScriptRequest $args)
    {
        $result = parent::updateScript($args->toArray());
        return new UpdateScriptResponse($result->toArray());
    }
}
