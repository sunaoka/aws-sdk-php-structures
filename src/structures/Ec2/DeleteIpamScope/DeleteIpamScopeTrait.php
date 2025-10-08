<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamScope;

trait DeleteIpamScopeTrait
{
    /**
     * @param DeleteIpamScopeRequest $args
     * @return DeleteIpamScopeResponse
     */
    public function deleteIpamScope(DeleteIpamScopeRequest $args)
    {
        $result = parent::deleteIpamScope($args->toArray());
        return new DeleteIpamScopeResponse($result->toArray());
    }
}
