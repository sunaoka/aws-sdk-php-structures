<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackWorkspaceAuthorization;

trait DeleteSlackWorkspaceAuthorizationTrait
{
    /**
     * @param DeleteSlackWorkspaceAuthorizationRequest $args
     * @return DeleteSlackWorkspaceAuthorizationResponse
     */
    public function deleteSlackWorkspaceAuthorization(DeleteSlackWorkspaceAuthorizationRequest $args)
    {
        $result = parent::deleteSlackWorkspaceAuthorization($args->toArray());
        return new DeleteSlackWorkspaceAuthorizationResponse($result->toArray());
    }
}
