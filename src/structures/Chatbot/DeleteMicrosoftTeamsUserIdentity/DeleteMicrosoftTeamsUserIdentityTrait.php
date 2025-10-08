<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteMicrosoftTeamsUserIdentity;

trait DeleteMicrosoftTeamsUserIdentityTrait
{
    /**
     * @param DeleteMicrosoftTeamsUserIdentityRequest $args
     * @return DeleteMicrosoftTeamsUserIdentityResponse
     */
    public function deleteMicrosoftTeamsUserIdentity(DeleteMicrosoftTeamsUserIdentityRequest $args)
    {
        $result = parent::deleteMicrosoftTeamsUserIdentity($args->toArray());
        return new DeleteMicrosoftTeamsUserIdentityResponse($result->toArray());
    }
}
