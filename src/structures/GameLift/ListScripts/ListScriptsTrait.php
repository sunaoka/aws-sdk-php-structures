<?php

namespace Sunaoka\Aws\Structures\GameLift\ListScripts;

trait ListScriptsTrait
{
    /**
     * @param ListScriptsRequest $args
     * @return ListScriptsResponse
     */
    public function listScripts(ListScriptsRequest $args)
    {
        $result = parent::listScripts($args->toArray());
        return new ListScriptsResponse($result->toArray());
    }
}
