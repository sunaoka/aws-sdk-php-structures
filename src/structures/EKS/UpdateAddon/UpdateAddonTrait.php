<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateAddon;

trait UpdateAddonTrait
{
    /**
     * @param UpdateAddonRequest $args
     * @return UpdateAddonResponse
     */
    public function updateAddon(UpdateAddonRequest $args)
    {
        $result = parent::updateAddon($args->toArray());
        return new UpdateAddonResponse($result->toArray());
    }
}
