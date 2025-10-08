<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectRetention;

trait GetObjectRetentionTrait
{
    /**
     * @param GetObjectRetentionRequest $args
     * @return GetObjectRetentionResponse
     */
    public function getObjectRetention(GetObjectRetentionRequest $args)
    {
        $result = parent::getObjectRetention($args->toArray());
        return new GetObjectRetentionResponse($result->toArray());
    }
}
