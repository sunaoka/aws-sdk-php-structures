<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachClassicLinkVpc;

trait DetachClassicLinkVpcTrait
{
    /**
     * @param DetachClassicLinkVpcRequest $args
     * @return DetachClassicLinkVpcResponse
     */
    public function detachClassicLinkVpc(DetachClassicLinkVpcRequest $args)
    {
        $result = parent::detachClassicLinkVpc($args->toArray());
        return new DetachClassicLinkVpcResponse($result->toArray());
    }
}
