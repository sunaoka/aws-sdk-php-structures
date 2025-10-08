<?php

namespace Sunaoka\Aws\Structures\QApps\CreatePresignedUrl;

trait CreatePresignedUrlTrait
{
    /**
     * @param CreatePresignedUrlRequest $args
     * @return CreatePresignedUrlResponse
     */
    public function createPresignedUrl(CreatePresignedUrlRequest $args)
    {
        $result = parent::createPresignedUrl($args->toArray());
        return new CreatePresignedUrlResponse($result->toArray());
    }
}
