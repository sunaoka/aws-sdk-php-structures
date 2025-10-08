<?php

namespace Sunaoka\Aws\Structures\EKS\ListAddons;

trait ListAddonsTrait
{
    /**
     * @param ListAddonsRequest $args
     * @return ListAddonsResponse
     */
    public function listAddons(ListAddonsRequest $args)
    {
        $result = parent::listAddons($args->toArray());
        return new ListAddonsResponse($result->toArray());
    }
}
