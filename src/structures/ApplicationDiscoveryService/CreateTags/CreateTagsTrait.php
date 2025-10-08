<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\CreateTags;

trait CreateTagsTrait
{
    /**
     * @param CreateTagsRequest $args
     * @return CreateTagsResponse
     */
    public function createTags(CreateTagsRequest $args)
    {
        $result = parent::createTags($args->toArray());
        return new CreateTagsResponse($result->toArray());
    }
}
