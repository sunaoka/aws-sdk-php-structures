<?php

namespace Sunaoka\Aws\Structures\Schemas\ListRegistries;

trait ListRegistriesTrait
{
    /**
     * @param ListRegistriesRequest $args
     * @return ListRegistriesResponse
     */
    public function listRegistries(ListRegistriesRequest $args)
    {
        $result = parent::listRegistries($args->toArray());
        return new ListRegistriesResponse($result->toArray());
    }
}
