<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLinks;

trait GetVpcLinksTrait
{
    /**
     * @param GetVpcLinksRequest $args
     * @return GetVpcLinksResponse
     */
    public function getVpcLinks(GetVpcLinksRequest $args)
    {
        $result = parent::getVpcLinks($args->toArray());
        return new GetVpcLinksResponse($result->toArray());
    }
}
