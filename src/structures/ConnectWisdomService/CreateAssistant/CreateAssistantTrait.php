<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateAssistant;

trait CreateAssistantTrait
{
    /**
     * @param CreateAssistantRequest $args
     * @return CreateAssistantResponse
     */
    public function createAssistant(CreateAssistantRequest $args)
    {
        $result = parent::createAssistant($args->toArray());
        return new CreateAssistantResponse($result->toArray());
    }
}
