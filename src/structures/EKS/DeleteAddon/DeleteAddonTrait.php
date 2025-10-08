<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAddon;

trait DeleteAddonTrait
{
    /**
     * @param DeleteAddonRequest $args
     * @return DeleteAddonResponse
     */
    public function deleteAddon(DeleteAddonRequest $args)
    {
        $result = parent::deleteAddon($args->toArray());
        return new DeleteAddonResponse($result->toArray());
    }
}
