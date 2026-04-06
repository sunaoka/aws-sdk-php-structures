<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAssistant;

trait GetAssistantTrait
{
    /**
     * @param GetAssistantRequest $args
     * @return GetAssistantResponse
     */
    public function getAssistant(GetAssistantRequest $args)
    {
        $result = parent::getAssistant($args->toArray());
        return new GetAssistantResponse($result->toArray());
    }
}
