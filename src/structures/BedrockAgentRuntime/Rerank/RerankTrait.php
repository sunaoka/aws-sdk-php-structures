<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Rerank;

trait RerankTrait
{
    /**
     * @param RerankRequest $args
     * @return RerankResponse
     */
    public function rerank(RerankRequest $args)
    {
        $result = parent::rerank($args->toArray());
        return new RerankResponse($result->toArray());
    }
}
