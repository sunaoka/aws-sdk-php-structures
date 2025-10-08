<?php

namespace Sunaoka\Aws\Structures\Ec2\MoveAddressToVpc;

trait MoveAddressToVpcTrait
{
    /**
     * @param MoveAddressToVpcRequest $args
     * @return MoveAddressToVpcResponse
     */
    public function moveAddressToVpc(MoveAddressToVpcRequest $args)
    {
        $result = parent::moveAddressToVpc($args->toArray());
        return new MoveAddressToVpcResponse($result->toArray());
    }
}
