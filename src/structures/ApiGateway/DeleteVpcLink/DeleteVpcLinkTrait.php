<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteVpcLink;

trait DeleteVpcLinkTrait
{
    /**
     * @param DeleteVpcLinkRequest $args
     * @return void
     */
    public function deleteVpcLink(DeleteVpcLinkRequest $args)
    {
        parent::deleteVpcLink($args->toArray());
    }
}
