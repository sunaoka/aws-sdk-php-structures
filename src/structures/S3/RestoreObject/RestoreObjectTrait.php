<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject;

trait RestoreObjectTrait
{
    /**
     * @param RestoreObjectRequest $args
     * @return RestoreObjectResponse
     */
    public function restoreObject(RestoreObjectRequest $args)
    {
        $result = parent::restoreObject($args->toArray());
        return new RestoreObjectResponse($result->toArray());
    }
}
