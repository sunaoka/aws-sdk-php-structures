<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListPromptRouters;

trait ListPromptRoutersTrait
{
    /**
     * @param ListPromptRoutersRequest $args
     * @return ListPromptRoutersResponse
     */
    public function listPromptRouters(ListPromptRoutersRequest $args)
    {
        $result = parent::listPromptRouters($args->toArray());
        return new ListPromptRoutersResponse($result->toArray());
    }
}
