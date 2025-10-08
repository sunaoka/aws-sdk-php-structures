<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetDashboardEmbedUrl;

trait GetDashboardEmbedUrlTrait
{
    /**
     * @param GetDashboardEmbedUrlRequest $args
     * @return GetDashboardEmbedUrlResponse
     */
    public function getDashboardEmbedUrl(GetDashboardEmbedUrlRequest $args)
    {
        $result = parent::getDashboardEmbedUrl($args->toArray());
        return new GetDashboardEmbedUrlResponse($result->toArray());
    }
}
