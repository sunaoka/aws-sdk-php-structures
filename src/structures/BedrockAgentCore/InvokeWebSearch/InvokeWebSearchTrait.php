<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch;

trait InvokeWebSearchTrait
{
    /**
     * @param InvokeWebSearchRequest $args
     * @return InvokeWebSearchResponse
     */
    public function invokeWebSearch(InvokeWebSearchRequest $args)
    {
        $result = parent::invokeWebSearch($args->toArray());
        return new InvokeWebSearchResponse($result->toArray());
    }
}
