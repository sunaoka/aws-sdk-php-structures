<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRcsAgent;

trait CreateRcsAgentTrait
{
    /**
     * @param CreateRcsAgentRequest $args
     * @return CreateRcsAgentResponse
     */
    public function createRcsAgent(CreateRcsAgentRequest $args)
    {
        $result = parent::createRcsAgent($args->toArray());
        return new CreateRcsAgentResponse($result->toArray());
    }
}
