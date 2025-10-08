<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\GetAssistant;

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
