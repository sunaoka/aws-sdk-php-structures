<?php

namespace Sunaoka\Aws\Structures\Glacier\ListTagsForVault;

trait ListTagsForVaultTrait
{
    /**
     * @param ListTagsForVaultRequest $args
     * @return ListTagsForVaultResponse
     */
    public function listTagsForVault(ListTagsForVaultRequest $args)
    {
        $result = parent::listTagsForVault($args->toArray());
        return new ListTagsForVaultResponse($result->toArray());
    }
}
