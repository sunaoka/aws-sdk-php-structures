<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamScope;

trait ModifyIpamScopeTrait
{
    /**
     * @param ModifyIpamScopeRequest $args
     * @return ModifyIpamScopeResponse
     */
    public function modifyIpamScope(ModifyIpamScopeRequest $args)
    {
        $result = parent::modifyIpamScope($args->toArray());
        return new ModifyIpamScopeResponse($result->toArray());
    }
}
