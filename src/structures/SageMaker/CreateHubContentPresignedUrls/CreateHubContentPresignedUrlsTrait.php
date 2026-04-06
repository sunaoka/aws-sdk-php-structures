<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentPresignedUrls;

trait CreateHubContentPresignedUrlsTrait
{
    /**
     * @param CreateHubContentPresignedUrlsRequest $args
     * @return CreateHubContentPresignedUrlsResponse
     */
    public function createHubContentPresignedUrls(CreateHubContentPresignedUrlsRequest $args)
    {
        $result = parent::createHubContentPresignedUrls($args->toArray());
        return new CreateHubContentPresignedUrlsResponse($result->toArray());
    }
}
