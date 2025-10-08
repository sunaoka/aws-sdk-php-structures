<?php

namespace Sunaoka\Aws\Structures\S3\CopyObject;

trait CopyObjectTrait
{
    /**
     * @param CopyObjectRequest $args
     * @return CopyObjectResponse
     */
    public function copyObject(CopyObjectRequest $args)
    {
        $result = parent::copyObject($args->toArray());
        return new CopyObjectResponse($result->toArray());
    }
}
