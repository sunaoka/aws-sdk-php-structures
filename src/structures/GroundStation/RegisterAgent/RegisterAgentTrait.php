<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent;

trait RegisterAgentTrait
{
    /**
     * @param RegisterAgentRequest $args
     * @return RegisterAgentResponse
     */
    public function registerAgent(RegisterAgentRequest $args)
    {
        $result = parent::registerAgent($args->toArray());
        return new RegisterAgentResponse($result->toArray());
    }
}
