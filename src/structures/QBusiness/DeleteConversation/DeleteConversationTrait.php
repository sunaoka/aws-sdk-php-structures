<?php

namespace Sunaoka\Aws\Structures\QBusiness\DeleteConversation;

trait DeleteConversationTrait
{
    /**
     * @param DeleteConversationRequest $args
     * @return DeleteConversationResponse
     */
    public function deleteConversation(DeleteConversationRequest $args)
    {
        $result = parent::deleteConversation($args->toArray());
        return new DeleteConversationResponse($result->toArray());
    }
}
