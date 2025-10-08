<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens;

trait CountTokensTrait
{
    /**
     * @param CountTokensRequest $args
     * @return CountTokensResponse
     */
    public function countTokens(CountTokensRequest $args)
    {
        $result = parent::countTokens($args->toArray());
        return new CountTokensResponse($result->toArray());
    }
}
