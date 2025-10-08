<?php

namespace Sunaoka\Aws\Structures\S3\HeadObject;

trait HeadObjectTrait
{
    /**
     * @param HeadObjectRequest $args
     * @return HeadObjectResponse
     */
    public function headObject(HeadObjectRequest $args)
    {
        $result = parent::headObject($args->toArray());
        return new HeadObjectResponse($result->toArray());
    }
}
