<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetPromptRouter;

trait GetPromptRouterTrait
{
    /**
     * @param GetPromptRouterRequest $args
     * @return GetPromptRouterResponse
     */
    public function getPromptRouter(GetPromptRouterRequest $args)
    {
        $result = parent::getPromptRouter($args->toArray());
        return new GetPromptRouterResponse($result->toArray());
    }
}
