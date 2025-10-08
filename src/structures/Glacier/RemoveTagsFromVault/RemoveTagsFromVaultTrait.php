<?php

namespace Sunaoka\Aws\Structures\Glacier\RemoveTagsFromVault;

trait RemoveTagsFromVaultTrait
{
    /**
     * @param RemoveTagsFromVaultRequest $args
     * @return void
     */
    public function removeTagsFromVault(RemoveTagsFromVaultRequest $args)
    {
        parent::removeTagsFromVault($args->toArray());
    }
}
