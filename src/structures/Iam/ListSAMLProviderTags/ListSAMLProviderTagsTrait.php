<?php

namespace Sunaoka\Aws\Structures\Iam\ListSAMLProviderTags;

trait ListSAMLProviderTagsTrait
{
    /**
     * @param ListSAMLProviderTagsRequest $args
     * @return ListSAMLProviderTagsResponse
     */
    public function listSAMLProviderTags(ListSAMLProviderTagsRequest $args)
    {
        $result = parent::listSAMLProviderTags($args->toArray());
        return new ListSAMLProviderTagsResponse($result->toArray());
    }
}
