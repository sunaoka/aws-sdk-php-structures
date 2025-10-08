<?php

namespace Sunaoka\Aws\Structures\Iam\ListOpenIDConnectProviderTags;

trait ListOpenIDConnectProviderTagsTrait
{
    /**
     * @param ListOpenIDConnectProviderTagsRequest $args
     * @return ListOpenIDConnectProviderTagsResponse
     */
    public function listOpenIDConnectProviderTags(ListOpenIDConnectProviderTagsRequest $args)
    {
        $result = parent::listOpenIDConnectProviderTags($args->toArray());
        return new ListOpenIDConnectProviderTagsResponse($result->toArray());
    }
}
