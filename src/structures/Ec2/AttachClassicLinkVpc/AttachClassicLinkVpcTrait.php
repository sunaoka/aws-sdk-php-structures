<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachClassicLinkVpc;

trait AttachClassicLinkVpcTrait
{
    /**
     * @param AttachClassicLinkVpcRequest $args
     * @return AttachClassicLinkVpcResponse
     */
    public function attachClassicLinkVpc(AttachClassicLinkVpcRequest $args)
    {
        $result = parent::attachClassicLinkVpc($args->toArray());
        return new AttachClassicLinkVpcResponse($result->toArray());
    }
}
