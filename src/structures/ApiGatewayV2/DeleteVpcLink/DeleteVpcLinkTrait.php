<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteVpcLink;

trait DeleteVpcLinkTrait
{
    /**
     * @param DeleteVpcLinkRequest $args
     * @return DeleteVpcLinkResponse
     */
    public function deleteVpcLink(DeleteVpcLinkRequest $args)
    {
        $result = parent::deleteVpcLink($args->toArray());
        return new DeleteVpcLinkResponse($result->toArray());
    }
}
