<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteScript;

trait DeleteScriptTrait
{
    /**
     * @param DeleteScriptRequest $args
     * @return void
     */
    public function deleteScript(DeleteScriptRequest $args)
    {
        parent::deleteScript($args->toArray());
    }
}
