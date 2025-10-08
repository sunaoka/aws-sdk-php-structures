<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeThumbnails;

trait DescribeThumbnailsTrait
{
    /**
     * @param DescribeThumbnailsRequest $args
     * @return DescribeThumbnailsResponse
     */
    public function describeThumbnails(DescribeThumbnailsRequest $args)
    {
        $result = parent::describeThumbnails($args->toArray());
        return new DescribeThumbnailsResponse($result->toArray());
    }
}
