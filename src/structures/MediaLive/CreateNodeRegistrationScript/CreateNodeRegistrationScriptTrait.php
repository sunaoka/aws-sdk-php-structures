<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateNodeRegistrationScript;

trait CreateNodeRegistrationScriptTrait
{
    /**
     * @param CreateNodeRegistrationScriptRequest $args
     * @return CreateNodeRegistrationScriptResponse
     */
    public function createNodeRegistrationScript(CreateNodeRegistrationScriptRequest $args)
    {
        $result = parent::createNodeRegistrationScript($args->toArray());
        return new CreateNodeRegistrationScriptResponse($result->toArray());
    }
}
