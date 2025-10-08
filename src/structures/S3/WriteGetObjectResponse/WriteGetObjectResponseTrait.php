<?php

namespace Sunaoka\Aws\Structures\S3\WriteGetObjectResponse;

trait WriteGetObjectResponseTrait
{
    /**
     * @param WriteGetObjectResponseRequest $args
     * @return void
     */
    public function writeGetObjectResponse(WriteGetObjectResponseRequest $args)
    {
        parent::writeGetObjectResponse($args->toArray());
    }
}
