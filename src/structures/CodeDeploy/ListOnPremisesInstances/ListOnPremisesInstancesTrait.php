<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListOnPremisesInstances;

trait ListOnPremisesInstancesTrait
{
    /**
     * @param ListOnPremisesInstancesRequest $args
     * @return ListOnPremisesInstancesResponse
     */
    public function listOnPremisesInstances(ListOnPremisesInstancesRequest $args)
    {
        $result = parent::listOnPremisesInstances($args->toArray());
        return new ListOnPremisesInstancesResponse($result->toArray());
    }
}
