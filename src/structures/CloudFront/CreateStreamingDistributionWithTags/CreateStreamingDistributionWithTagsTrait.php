<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistributionWithTags;

trait CreateStreamingDistributionWithTagsTrait
{
    /**
     * @param CreateStreamingDistributionWithTagsRequest $args
     * @return CreateStreamingDistributionWithTagsResponse
     */
    public function createStreamingDistributionWithTags(CreateStreamingDistributionWithTagsRequest $args)
    {
        $result = parent::createStreamingDistributionWithTags($args->toArray());
        return new CreateStreamingDistributionWithTagsResponse($result->toArray());
    }
}
