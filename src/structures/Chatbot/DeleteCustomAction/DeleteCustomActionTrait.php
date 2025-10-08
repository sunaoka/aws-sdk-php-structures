<?php

namespace Sunaoka\Aws\Structures\Chatbot\DeleteCustomAction;

trait DeleteCustomActionTrait
{
    /**
     * @param DeleteCustomActionRequest $args
     * @return DeleteCustomActionResponse
     */
    public function deleteCustomAction(DeleteCustomActionRequest $args)
    {
        $result = parent::deleteCustomAction($args->toArray());
        return new DeleteCustomActionResponse($result->toArray());
    }
}
