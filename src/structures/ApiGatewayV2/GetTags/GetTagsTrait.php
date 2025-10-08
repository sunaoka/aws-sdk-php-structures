<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetTags;

trait GetTagsTrait
{
    /**
     * @param GetTagsRequest $args
     * @return GetTagsResponse
     */
    public function getTags(GetTagsRequest $args)
    {
        $result = parent::getTags($args->toArray());
        return new GetTagsResponse($result->toArray());
    }
}
