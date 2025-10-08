<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteSlackUserIdentity;

trait DeleteSlackUserIdentityTrait
{
    /**
     * @param DeleteSlackUserIdentityRequest $args
     * @return DeleteSlackUserIdentityResponse
     */
    public function deleteSlackUserIdentity(DeleteSlackUserIdentityRequest $args)
    {
        $result = parent::deleteSlackUserIdentity($args->toArray());
        return new DeleteSlackUserIdentityResponse($result->toArray());
    }
}
