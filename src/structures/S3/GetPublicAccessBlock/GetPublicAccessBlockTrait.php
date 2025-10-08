<?php

namespace Sunaoka\Aws\Structures\S3\GetPublicAccessBlock;

trait GetPublicAccessBlockTrait
{
    /**
     * @param GetPublicAccessBlockRequest $args
     * @return GetPublicAccessBlockResponse
     */
    public function getPublicAccessBlock(GetPublicAccessBlockRequest $args)
    {
        $result = parent::getPublicAccessBlock($args->toArray());
        return new GetPublicAccessBlockResponse($result->toArray());
    }
}
