<?php

namespace Sunaoka\Aws\Structures\S3\PutObject;

trait PutObjectTrait
{
    /**
     * @param PutObjectRequest $args
     * @return PutObjectResponse
     */
    public function putObject(PutObjectRequest $args)
    {
        $result = parent::putObject($args->toArray());
        return new PutObjectResponse($result->toArray());
    }
}
