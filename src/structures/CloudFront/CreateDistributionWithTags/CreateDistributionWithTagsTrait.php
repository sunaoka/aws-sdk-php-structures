<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags;

trait CreateDistributionWithTagsTrait
{
    /**
     * @param CreateDistributionWithTagsRequest $args
     * @return CreateDistributionWithTagsResponse
     */
    public function createDistributionWithTags(CreateDistributionWithTagsRequest $args)
    {
        $result = parent::createDistributionWithTags($args->toArray());
        return new CreateDistributionWithTagsResponse($result->toArray());
    }
}
