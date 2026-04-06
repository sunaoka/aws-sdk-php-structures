<?php

namespace Sunaoka\Aws\Structures\Connect\ListUserProficiencies;

trait ListUserProficienciesTrait
{
    /**
     * @param ListUserProficienciesRequest $args
     * @return ListUserProficienciesResponse
     */
    public function listUserProficiencies(ListUserProficienciesRequest $args)
    {
        $result = parent::listUserProficiencies($args->toArray());
        return new ListUserProficienciesResponse($result->toArray());
    }
}
