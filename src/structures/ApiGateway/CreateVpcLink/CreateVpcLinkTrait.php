<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateVpcLink;

trait CreateVpcLinkTrait
{
    /**
     * @param CreateVpcLinkRequest $args
     * @return CreateVpcLinkResponse
     */
    public function createVpcLink(CreateVpcLinkRequest $args)
    {
        $result = parent::createVpcLink($args->toArray());
        return new CreateVpcLinkResponse($result->toArray());
    }
}
