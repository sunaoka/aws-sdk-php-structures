<?php

namespace Sunaoka\Aws\Structures\S3\GetObject;

trait GetObjectTrait
{
    /**
     * @param GetObjectRequest $args
     * @return GetObjectResponse
     */
    public function getObject(GetObjectRequest $args)
    {
        $result = parent::getObject($args->toArray());
        return new GetObjectResponse($result->toArray());
    }
}
