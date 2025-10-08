<?php

namespace Sunaoka\Aws\Structures\Glacier\AddTagsToVault;

trait AddTagsToVaultTrait
{
    /**
     * @param AddTagsToVaultRequest $args
     * @return void
     */
    public function addTagsToVault(AddTagsToVaultRequest $args)
    {
        parent::addTagsToVault($args->toArray());
    }
}
