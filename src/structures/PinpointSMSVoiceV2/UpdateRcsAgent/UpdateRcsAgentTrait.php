<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateRcsAgent;

trait UpdateRcsAgentTrait
{
    /**
     * @param UpdateRcsAgentRequest $args
     * @return UpdateRcsAgentResponse
     */
    public function updateRcsAgent(UpdateRcsAgentRequest $args)
    {
        $result = parent::updateRcsAgent($args->toArray());
        return new UpdateRcsAgentResponse($result->toArray());
    }
}
