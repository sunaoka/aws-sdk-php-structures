<?php

namespace Sunaoka\Aws\Structures\APIPortal\ListManagedApis;

trait ListManagedApisTrait
{
    /**
     * @param ListManagedApisRequest $args
     * @return ListManagedApisResponse
     */
    public function listManagedApis(ListManagedApisRequest $args)
    {
        $result = parent::listManagedApis($args->toArray());
        return new ListManagedApisResponse($result->toArray());
    }
}
