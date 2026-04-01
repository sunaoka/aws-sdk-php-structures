<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRcsAgent;

trait DeleteRcsAgentTrait
{
    /**
     * @param DeleteRcsAgentRequest $args
     * @return DeleteRcsAgentResponse
     */
    public function deleteRcsAgent(DeleteRcsAgentRequest $args)
    {
        $result = parent::deleteRcsAgent($args->toArray());
        return new DeleteRcsAgentResponse($result->toArray());
    }
}
