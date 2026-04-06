<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetMarketplaceResource;

trait GetMarketplaceResourceTrait
{
    /**
     * @param GetMarketplaceResourceRequest $args
     * @return GetMarketplaceResourceResponse
     */
    public function getMarketplaceResource(GetMarketplaceResourceRequest $args)
    {
        $result = parent::getMarketplaceResource($args->toArray());
        return new GetMarketplaceResourceResponse($result->toArray());
    }
}
