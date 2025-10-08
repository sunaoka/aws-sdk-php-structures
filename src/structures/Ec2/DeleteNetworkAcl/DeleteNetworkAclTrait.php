<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAcl;

trait DeleteNetworkAclTrait
{
    /**
     * @param DeleteNetworkAclRequest $args
     * @return void
     */
    public function deleteNetworkAcl(DeleteNetworkAclRequest $args)
    {
        parent::deleteNetworkAcl($args->toArray());
    }
}
