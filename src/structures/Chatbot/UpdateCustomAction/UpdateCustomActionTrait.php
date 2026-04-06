<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateCustomAction;

trait UpdateCustomActionTrait
{
    /**
     * @param UpdateCustomActionRequest $args
     * @return UpdateCustomActionResponse
     */
    public function updateCustomAction(UpdateCustomActionRequest $args)
    {
        $result = parent::updateCustomAction($args->toArray());
        return new UpdateCustomActionResponse($result->toArray());
    }
}
