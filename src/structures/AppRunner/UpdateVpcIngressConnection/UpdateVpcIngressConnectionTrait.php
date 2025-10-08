<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateVpcIngressConnection;

trait UpdateVpcIngressConnectionTrait
{
    /**
     * @param UpdateVpcIngressConnectionRequest $args
     * @return UpdateVpcIngressConnectionResponse
     */
    public function updateVpcIngressConnection(UpdateVpcIngressConnectionRequest $args)
    {
        $result = parent::updateVpcIngressConnection($args->toArray());
        return new UpdateVpcIngressConnectionResponse($result->toArray());
    }
}
