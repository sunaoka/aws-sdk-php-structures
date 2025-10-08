<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceNetworkAclEntry;

trait ReplaceNetworkAclEntryTrait
{
    /**
     * @param ReplaceNetworkAclEntryRequest $args
     * @return void
     */
    public function replaceNetworkAclEntry(ReplaceNetworkAclEntryRequest $args)
    {
        parent::replaceNetworkAclEntry($args->toArray());
    }
}
