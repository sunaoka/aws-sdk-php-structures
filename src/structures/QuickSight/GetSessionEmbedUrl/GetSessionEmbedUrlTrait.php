<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetSessionEmbedUrl;

trait GetSessionEmbedUrlTrait
{
    /**
     * @param GetSessionEmbedUrlRequest $args
     * @return GetSessionEmbedUrlResponse
     */
    public function getSessionEmbedUrl(GetSessionEmbedUrlRequest $args)
    {
        $result = parent::getSessionEmbedUrl($args->toArray());
        return new GetSessionEmbedUrlResponse($result->toArray());
    }
}
