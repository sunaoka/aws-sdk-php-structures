<?php

namespace Sunaoka\Aws\Structures\Lightsail\UnpeerVpc;

trait UnpeerVpcTrait
{
    /**
     * @param UnpeerVpcRequest $args
     * @return UnpeerVpcResponse
     */
    public function unpeerVpc(UnpeerVpcRequest $args)
    {
        $result = parent::unpeerVpc($args->toArray());
        return new UnpeerVpcResponse($result->toArray());
    }
}
