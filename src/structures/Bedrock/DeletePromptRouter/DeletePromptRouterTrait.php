<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeletePromptRouter;

trait DeletePromptRouterTrait
{
    /**
     * @param DeletePromptRouterRequest $args
     * @return DeletePromptRouterResponse
     */
    public function deletePromptRouter(DeletePromptRouterRequest $args)
    {
        $result = parent::deletePromptRouter($args->toArray());
        return new DeletePromptRouterResponse($result->toArray());
    }
}
