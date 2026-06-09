<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAccountDataRetention;

trait GetAccountDataRetentionTrait
{
    /**
     * @param GetAccountDataRetentionRequest $args
     * @return GetAccountDataRetentionResponse
     */
    public function getAccountDataRetention(GetAccountDataRetentionRequest $args)
    {
        $result = parent::getAccountDataRetention($args->toArray());
        return new GetAccountDataRetentionResponse($result->toArray());
    }
}
