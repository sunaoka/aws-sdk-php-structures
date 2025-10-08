<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetVpcLink;

trait GetVpcLinkTrait
{
    /**
     * @param GetVpcLinkRequest $args
     * @return GetVpcLinkResponse
     */
    public function getVpcLink(GetVpcLinkRequest $args)
    {
        $result = parent::getVpcLink($args->toArray());
        return new GetVpcLinkResponse($result->toArray());
    }
}
