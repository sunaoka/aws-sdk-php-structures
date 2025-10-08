<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplicationPresignedUrl;

trait CreateApplicationPresignedUrlTrait
{
    /**
     * @param CreateApplicationPresignedUrlRequest $args
     * @return CreateApplicationPresignedUrlResponse
     */
    public function createApplicationPresignedUrl(CreateApplicationPresignedUrlRequest $args)
    {
        $result = parent::createApplicationPresignedUrl($args->toArray());
        return new CreateApplicationPresignedUrlResponse($result->toArray());
    }
}
