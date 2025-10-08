<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamScope;

trait CreateIpamScopeTrait
{
    /**
     * @param CreateIpamScopeRequest $args
     * @return CreateIpamScopeResponse
     */
    public function createIpamScope(CreateIpamScopeRequest $args)
    {
        $result = parent::createIpamScope($args->toArray());
        return new CreateIpamScopeResponse($result->toArray());
    }
}
