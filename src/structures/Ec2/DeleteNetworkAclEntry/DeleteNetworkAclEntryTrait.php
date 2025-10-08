<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAclEntry;

trait DeleteNetworkAclEntryTrait
{
    /**
     * @param DeleteNetworkAclEntryRequest $args
     * @return void
     */
    public function deleteNetworkAclEntry(DeleteNetworkAclEntryRequest $args)
    {
        parent::deleteNetworkAclEntry($args->toArray());
    }
}
