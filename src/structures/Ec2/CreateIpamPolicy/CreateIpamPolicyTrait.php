<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamPolicy;

trait CreateIpamPolicyTrait
{
    /**
     * @param CreateIpamPolicyRequest $args
     * @return CreateIpamPolicyResponse
     */
    public function createIpamPolicy(CreateIpamPolicyRequest $args)
    {
        $result = parent::createIpamPolicy($args->toArray());
        return new CreateIpamPolicyResponse($result->toArray());
    }
}
