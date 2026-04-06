<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreatePromptRouter;

trait CreatePromptRouterTrait
{
    /**
     * @param CreatePromptRouterRequest $args
     * @return CreatePromptRouterResponse
     */
    public function createPromptRouter(CreatePromptRouterRequest $args)
    {
        $result = parent::createPromptRouter($args->toArray());
        return new CreatePromptRouterResponse($result->toArray());
    }
}
