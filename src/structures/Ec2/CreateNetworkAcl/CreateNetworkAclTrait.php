<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl;

trait CreateNetworkAclTrait
{
    /**
     * @param CreateNetworkAclRequest $args
     * @return CreateNetworkAclResponse
     */
    public function createNetworkAcl(CreateNetworkAclRequest $args)
    {
        $result = parent::createNetworkAcl($args->toArray());
        return new CreateNetworkAclResponse($result->toArray());
    }
}
