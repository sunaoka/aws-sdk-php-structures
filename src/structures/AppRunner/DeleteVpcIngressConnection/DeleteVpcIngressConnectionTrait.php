<?php

namespace Sunaoka\Aws\Structures\AppRunner\DeleteVpcIngressConnection;

trait DeleteVpcIngressConnectionTrait
{
    /**
     * @param DeleteVpcIngressConnectionRequest $args
     * @return DeleteVpcIngressConnectionResponse
     */
    public function deleteVpcIngressConnection(DeleteVpcIngressConnectionRequest $args)
    {
        $result = parent::deleteVpcIngressConnection($args->toArray());
        return new DeleteVpcIngressConnectionResponse($result->toArray());
    }
}
