<?php

namespace Sunaoka\Aws\Structures\Evs\ListEnvironmentVlans;

trait ListEnvironmentVlansTrait
{
    /**
     * @param ListEnvironmentVlansRequest $args
     * @return ListEnvironmentVlansResponse
     */
    public function listEnvironmentVlans(ListEnvironmentVlansRequest $args)
    {
        $result = parent::listEnvironmentVlans($args->toArray());
        return new ListEnvironmentVlansResponse($result->toArray());
    }
}
