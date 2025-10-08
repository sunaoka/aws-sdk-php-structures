<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListConfigs;

trait ListConfigsTrait
{
    /**
     * @param ListConfigsRequest $args
     * @return ListConfigsResponse
     */
    public function listConfigs(ListConfigsRequest $args)
    {
        $result = parent::listConfigs($args->toArray());
        return new ListConfigsResponse($result->toArray());
    }
}
