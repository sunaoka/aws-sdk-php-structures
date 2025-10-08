<?php

namespace Sunaoka\Aws\Structures\EKS\CreateAddon;

trait CreateAddonTrait
{
    /**
     * @param CreateAddonRequest $args
     * @return CreateAddonResponse
     */
    public function createAddon(CreateAddonRequest $args)
    {
        $result = parent::createAddon($args->toArray());
        return new CreateAddonResponse($result->toArray());
    }
}
