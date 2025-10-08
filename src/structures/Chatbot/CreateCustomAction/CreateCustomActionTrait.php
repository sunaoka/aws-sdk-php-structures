<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateCustomAction;

trait CreateCustomActionTrait
{
    /**
     * @param CreateCustomActionRequest $args
     * @return CreateCustomActionResponse
     */
    public function createCustomAction(CreateCustomActionRequest $args)
    {
        $result = parent::createCustomAction($args->toArray());
        return new CreateCustomActionResponse($result->toArray());
    }
}
