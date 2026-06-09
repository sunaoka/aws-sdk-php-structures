<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutAccountDataRetention;

trait PutAccountDataRetentionTrait
{
    /**
     * @param PutAccountDataRetentionRequest $args
     * @return PutAccountDataRetentionResponse
     */
    public function putAccountDataRetention(PutAccountDataRetentionRequest $args)
    {
        $result = parent::putAccountDataRetention($args->toArray());
        return new PutAccountDataRetentionResponse($result->toArray());
    }
}
