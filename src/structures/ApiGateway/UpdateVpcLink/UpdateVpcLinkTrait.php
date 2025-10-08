<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateVpcLink;

trait UpdateVpcLinkTrait
{
    /**
     * @param UpdateVpcLinkRequest $args
     * @return UpdateVpcLinkResponse
     */
    public function updateVpcLink(UpdateVpcLinkRequest $args)
    {
        $result = parent::updateVpcLink($args->toArray());
        return new UpdateVpcLinkResponse($result->toArray());
    }
}
