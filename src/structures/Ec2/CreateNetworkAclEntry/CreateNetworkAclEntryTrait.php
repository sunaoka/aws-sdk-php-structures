<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAclEntry;

trait CreateNetworkAclEntryTrait
{
    /**
     * @param CreateNetworkAclEntryRequest $args
     * @return void
     */
    public function createNetworkAclEntry(CreateNetworkAclEntryRequest $args)
    {
        parent::createNetworkAclEntry($args->toArray());
    }
}
