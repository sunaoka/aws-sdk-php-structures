<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectRetention;

trait PutObjectRetentionTrait
{
    /**
     * @param PutObjectRetentionRequest $args
     * @return PutObjectRetentionResponse
     */
    public function putObjectRetention(PutObjectRetentionRequest $args)
    {
        $result = parent::putObjectRetention($args->toArray());
        return new PutObjectRetentionResponse($result->toArray());
    }
}
